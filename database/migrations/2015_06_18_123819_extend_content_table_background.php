<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendContentTableBackground extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('site_contents')){
            Schema::table('site_contents', function(Blueprint $table){
                $table->string('background');
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
		if(Schema::hasTable('site_contents')){
            Schema::table('site_contents', function(Blueprint $table){
                $table->dropColumn('background');
            });
        }
	}

}
