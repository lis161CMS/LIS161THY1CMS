<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationcontentsTable extends Migration
{
    /**
     * Run the migrations.
     * @table navigationcontents
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigationcontents', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->index(["content_id"], 'fk_navigationcontents_contents1_idx');

            $table->index(["navigation_id"], 'fk_navigationcontents_navigations1_idx');
            $table->nullableTimestamps();


            $table->foreign('navigation_id', 'fk_navigationcontents_navigations1_idx')
                ->references('id')->on('navigations')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('content_id', 'fk_navigationcontents_contents1_idx')
                ->references('id')->on('contents')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('navigationcontents');
     }
}
