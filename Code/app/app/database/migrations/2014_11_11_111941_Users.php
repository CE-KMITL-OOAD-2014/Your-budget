<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('Member', function($table)
        { 
        	$table->string('userName')->unique();
            $table->increments('id');
            $table->string('name');
            $table->string('planType')->nullable(true);
            $table->integer('point');
            $table->integer('balance');
            $table->string('password');
            $table->string('remember_token',100);
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
		Schema::drop('Member');
	}

}
