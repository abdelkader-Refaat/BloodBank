<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->text('notification_settings_text');
			$table->text('about_app');
			$table->string('phone');
			$table->text('email');
			$table->text('fb_link');
			$table->text('tw_link');
			$table->text('inst_link');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}