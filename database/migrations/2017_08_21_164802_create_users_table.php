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
                $table->engine = 'InnoDB'; //设置表引擎
                $table->increments('uid');  //主键id
                $table->string('uname',32); //varchar(32)
                $table->string('upassword',32); 
                $table->string('phone',32); 
                $table->string('email',32); 
                $table->string('static',32); 
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
        //
    }
}
