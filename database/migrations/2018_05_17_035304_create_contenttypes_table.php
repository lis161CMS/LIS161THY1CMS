<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContenttypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contenttypes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('contentType');
			$table->text('contentTypeDesc', 65535)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id')->index('fk_contentTypes_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contenttypes');
	}

}
