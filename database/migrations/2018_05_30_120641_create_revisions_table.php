<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('revisions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('content', 65535);
			$table->string('revisionNo');
			$table->timestamps();
			$table->softDeletes();
			$table->dateTime('created_at_copy1')->nullable();
			$table->dateTime('updated_at_copy1')->nullable();
			$table->dateTime('deleted_at_copy1')->nullable();
			$table->string('imageLink')->nullable();
			$table->integer('content_id')->index('fk_revisions_contents1_idx');
			$table->integer('user_id')->index('fk_revisions_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('revisions');
	}

}
