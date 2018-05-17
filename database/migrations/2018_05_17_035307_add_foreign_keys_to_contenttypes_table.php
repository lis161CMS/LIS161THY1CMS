<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContenttypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contenttypes', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_contentTypes_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contenttypes', function(Blueprint $table)
		{
			$table->dropForeign('fk_contentTypes_users1');
		});
	}

}
