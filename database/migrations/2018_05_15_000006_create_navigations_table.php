<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationsTable extends Migration
{
    /**
     * Run the migrations.
     * @table navigations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigations', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->index(["user_id"], 'fk_navigations_users1_idx');

            $table->index(["role_id"], 'fk_navigations_roles1_idx');

            $table->index(["navigationType_id"], 'fk_navigations_navigationTypes1_idx');
            $table->nullableTimestamps();


            $table->foreign('role_id', 'fk_navigations_roles1_idx')
                ->references('id')->on('roles')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('navigationType_id', 'fk_navigations_navigationTypes1_idx')
                ->references('id')->on('navigationTypes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_navigations_users1_idx')
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
       Schema::dropIfExists('navigations');
     }
}
