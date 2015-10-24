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
            $table->increments('id');
            $table->bigInteger('Article_id');
            $table->string('extend_key');
            $table->text('extend_value');
            $table->timestamp('published_at');
            $table->timestamps();
            $table->tinyInteger('flag')->default(1);
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
