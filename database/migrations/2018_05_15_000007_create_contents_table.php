<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     * @table contents
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->index(["user_id"], 'fk_content_users1_idx');

            $table->index(["contentType_id"], 'fk_content_contentTypes1_idx');
            $table->nullableTimestamps();


            $table->foreign('contentType_id', 'fk_content_contentTypes1_idx')
                ->references('id')->on('contentTypes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_content_users1_idx')
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
       Schema::dropIfExists('contents');
     }
}
