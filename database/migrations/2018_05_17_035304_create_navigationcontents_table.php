<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNavigationcontentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navigationcontents', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('navigation_id')->index('fk_navigationcontents_navigations1_idx');
			$table->integer('content_id')->index('fk_navigationcontents_contents1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('navigationcontents');
	}

}
