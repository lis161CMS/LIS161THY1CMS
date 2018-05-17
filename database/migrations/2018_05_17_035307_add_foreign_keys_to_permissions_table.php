<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('permissions', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_permissions_roles1')->references('id')->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('permissions', function(Blueprint $table)
		{
			$table->dropForeign('fk_permissions_roles1');
		});
	}

}
