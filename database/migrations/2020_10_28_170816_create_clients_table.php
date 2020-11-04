<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('phone');
			$table->text('email');
			$table->text('password');
			$table->date('d_o_b');
			$table->date('last_donation_date');
			$table->enum('blood_type', array('A+', '0+', 'O-', 'B+', 'AB+', 'AB-', 'A-', 'B-'));
			$table->integer('pin_code');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}