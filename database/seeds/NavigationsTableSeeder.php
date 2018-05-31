<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NavigationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('navigations')->insert(array (
          0 =>
          array (
              'id' => 1,
              'navigationName' => 'View Content',
              'navigationLink' => 'home.user',
              'navactivated' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 2,
              'navigationType_id' => 1,
          ),
          1 =>
          array (
              'id' => 2,
              'navigationName' => 'Add Content',
              'navigationLink' => 'contents.create',
              'navactivated' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 2,
              'navigationType_id' => 1,
          ),
          2 =>
          array (
              'id' => 3,
              'navigationName' => 'View Own Content',
              'navigationLink' => 'content.user',
              'navactivated' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 2,
              'navigationType_id' => 1,
          ),
      ));
    }
}
