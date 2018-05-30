<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRevisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('revisions', function(Blueprint $table)
		{
			$table->foreign('content_id', 'fk_revisions_contents1')->references('id')->on('contents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_revisions_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('revisions', function(Blueprint $table)
		{
			$table->dropForeign('fk_revisions_contents1');
			$table->dropForeign('fk_revisions_users1');
		});
	}

}
