<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessAreaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('business_areas')){
            Schema::create('business_areas', function(Blueprint $table){
                $table->increments('id');
                $table->string('title');
                $table->text('description');
                $table->string('background');
                $table->timestamps();
            });
        }
        if(Schema::hasTable('hlogeon_scms_pages')){
            Schema::table('hlogeon_scms_pages', function(Blueprint $table){
                $table->integer('business_area_id');
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
		Schema::dropIfExists('business_areas');
	}

}
