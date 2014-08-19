<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsToTextsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('words_to_text', function($table)
            {
                $table->primary(array('word_id', 'text_id'));
		$table->integer('word_id')->unsigned();
                $table->integer('text_id')->unsigned();
                $table->foreign('word_id')->references('id')->on('words');
                $table->foreign('text_id')->references('id')->on('texts');
            });
                
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('words_to_text');
	}

}
