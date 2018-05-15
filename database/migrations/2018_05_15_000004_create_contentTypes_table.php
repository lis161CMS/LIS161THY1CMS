<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenttypesTable extends Migration
{
    /**
     * Run the migrations.
     * @table contentTypes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contentTypes', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->index(["user_id"], 'fk_contentTypes_users1_idx');
            $table->nullableTimestamps();


            $table->foreign('user_id', 'fk_contentTypes_users1_idx')
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
       Schema::dropIfExists('contentTypes');
     }
}
