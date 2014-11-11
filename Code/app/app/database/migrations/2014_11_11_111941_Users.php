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
        	$table->string('username');
            $table->increments('id');
            $table->string('name');
            $table->string('planType');
            $table->integer('point');
            $table->integer('balance');
            $table->string('password');
            $table->timestamps();
            
            $table->unique('username');
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
