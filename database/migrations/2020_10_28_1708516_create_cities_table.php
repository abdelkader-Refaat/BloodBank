<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		 if(!Schema::hasTable('cities')){

		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 20);
			$table->integer('governorate_id')->unsigned();
			$table->foreign('governorate_id')->references('id')->on('governorates')
						->onDelete('restrict')
						->onUpdate('restrict');
            
			$table->timestamps();

		});	
		}		
	}

	public function down()
	{
		Schema::drop('cities');
	}
} 
