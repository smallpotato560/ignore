<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->integer('parent')->comment('父级');
            $table->string('title')->comment('标题');
            $table->string('intro')->comment('简介');
            $table->text('content')->comment("内容");
            $table->integer('Users_id')->comment("发布者");
            $table->timestamp('published_at')->comment("发布时间");
            $table->softDeletes()->comment("软删除");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
