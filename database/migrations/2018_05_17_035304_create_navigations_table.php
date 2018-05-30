<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNavigationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navigations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('navigationName', 45);
			$table->string('navigationLink', 45);
			$table->tinyInteger('navactivated');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('role_id')->index('fk_navigations_roles1_idx');
			$table->integer('navigationType_id')->index('fk_navigations_navigationTypes1_idx');
			$table->integer('user_id')->index('fk_navigations_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('navigations');
	}

}
