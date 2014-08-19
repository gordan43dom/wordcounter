<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('words', function($table)
            {
                $table->increments('id');
                $table->integer('language_id')->unsigned();
                $table->string('term')->unique();
                $table->integer('frequency');
                $table->integer('length');
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
		Schema::drop('words');
	}

}
