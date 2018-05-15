<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisionsTable extends Migration
{
    /**
     * Run the migrations.
     * @table revisions
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->index(["content_id"], 'fk_revisions_contents1_idx');

            $table->index(["user_id"], 'fk_revisions_users1_idx');
            $table->nullableTimestamps();


            $table->foreign('content_id', 'fk_revisions_contents1_idx')
                ->references('id')->on('contents')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_revisions_users1_idx')
                ->references('id')->on('users')
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
       Schema::dropIfExists('revisions');
     }
}
