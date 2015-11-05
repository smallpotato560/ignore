<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->string('name')->unique()->comment('用户名');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('role')->default('normal user')->comment('角色规则');
            $table->rememberToken()->comment('是否记住用户');
            $table->timestamp('login_at')->comment('何时登陆');
            $table->timestamp('logout_at')->comment('何时注销');
            $table->timestamp('sign_up_at')->comment('何时注册');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
