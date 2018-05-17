<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('firstName')->nullable();
			$table->string('middleName')->nullable();
			$table->string('lastName')->nullable();
			$table->string('email');
			$table->string('password')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('role_id')->index('fk_users_roles_idx');
			$table->string('userPhoto')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
