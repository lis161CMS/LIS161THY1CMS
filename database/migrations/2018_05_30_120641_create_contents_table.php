<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('contentTitle', 65535);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('contentType_id')->index('fk_content_contentTypes1_idx');
			$table->integer('user_id')->index('fk_content_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contents');
	}

}
