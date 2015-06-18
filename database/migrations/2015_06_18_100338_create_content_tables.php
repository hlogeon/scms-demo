<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('site_contents')){
            Schema::create('site_contents', function(Blueprint $table){
                $table->increments('id');
                $table->string('title');
                $table->text('content');
                $table->integer('user_id');
                $table->integer('content_type_id');
                $table->string('file');
                $table->timestamps();
            });
        }

        if(!Schema::hasTable('content_types')){
            Schema::create('content_types', function(Blueprint $table){
                $table->increments('id');
                $table->string('title');
                $table->boolean('has_form');
                $table->string('form_class');
                $table->string('form_action');
                $table->string('redirect_url');
                $table->timestamps();
            });
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('content_types');
        Schema::dropIfExists('site_contents');
	}

}
