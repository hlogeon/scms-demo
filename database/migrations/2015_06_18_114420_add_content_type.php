<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContentType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('content_themes')){
            Schema::create('content_themes', function(Blueprint $table){
                $table->increments('id');
                $table->string('title');
                $table->text('description');
                $table->timestamps();
            });
        }
        if(!Schema::hasColumn('site_contents', 'content_theme_id')){
            Schema::table('site_contents', function(Blueprint $table){
                $table->integer('content_theme_id');
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
		Schema::dropIfExists('content_themes');
        if(Schema::hasColumn('site_contents', 'content_themes_id')){
            Schema::table('site_contents', function(Blueprint $table){
                $table->dropColumn('content_themes_id');
            });
        }
	}

}
