<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('texts', function($table)
            {
                $table->increments('id');
                $table->integer('language_id')->unsigned();
                $table->string('title');
                $table->string('hash_term')->unique();
                $table->timestamps();
                $table->foreign('language_id')->references('id')->on('languages');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('texts');
	}

}
