<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesExtend extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_extend', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->integer('Articles_id')->comment('作者ID');
            $table->string('extend_key')->comment('扩展字段名');
            $table->text('extend_value')->comment('扩展字段值');
            $table->softDeletes();
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
        Schema::drop('articles_extend');
    }
}
