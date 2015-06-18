<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendHlogeonScmsPagesTableAdditionalContent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('hlogeon_scms_pages')){
            Schema::table('hlogeon_scms_pages', function(Blueprint $table){
                $table->text('additional_content');
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
        if(Schema::hasTable('hlogeon_scms_pages')){
            Schema::table('hlogeon_scms_pages', function(Blueprint $table){
                $table->dropColumn('additional_content');
            });
        }
	}

}
