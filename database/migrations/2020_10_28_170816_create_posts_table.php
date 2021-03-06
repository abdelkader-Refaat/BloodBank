<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {
	public function up()	
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('image');
			$table->text('content');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
            $table->timestamps();


        
		});  
		 
	}
	public function down()
	{
		Schema::drop('posts');
	}
}