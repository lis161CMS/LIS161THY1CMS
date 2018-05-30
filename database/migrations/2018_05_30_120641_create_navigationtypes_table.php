<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNavigationtypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navigationtypes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('navigationType')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id')->index('fk_navigationTypes_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('navigationtypes');
	}

}
