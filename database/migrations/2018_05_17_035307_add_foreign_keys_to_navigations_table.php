<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNavigationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('navigations', function(Blueprint $table)
		{
			$table->foreign('navigationType_id', 'fk_navigations_navigationTypes1')->references('id')->on('navigationtypes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('role_id', 'fk_navigations_roles1')->references('id')->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_navigations_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('navigations', function(Blueprint $table)
		{
			$table->dropForeign('fk_navigations_navigationTypes1');
			$table->dropForeign('fk_navigations_roles1');
			$table->dropForeign('fk_navigations_users1');
		});
	}

}
