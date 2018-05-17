<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNavigationtypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('navigationtypes', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_navigationTypes_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('navigationtypes', function(Blueprint $table)
		{
			$table->dropForeign('fk_navigationTypes_users1');
		});
	}

}
