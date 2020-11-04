<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('phone');
			$table->text('email');
			$table->string('msg-title');
			$table->string('msg_content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}