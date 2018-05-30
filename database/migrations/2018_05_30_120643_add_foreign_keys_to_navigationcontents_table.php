<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNavigationcontentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('navigationcontents', function(Blueprint $table)
		{
			$table->foreign('content_id', 'fk_navigationcontents_contents1')->references('id')->on('contents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('navigation_id', 'fk_navigationcontents_navigations1')->references('id')->on('navigations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('navigationcontents', function(Blueprint $table)
		{
			$table->dropForeign('fk_navigationcontents_contents1');
			$table->dropForeign('fk_navigationcontents_navigations1');
		});
	}

}
