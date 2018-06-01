<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NavigationcontentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('navigationcontents')->insert(array (
          0 =>
          array (
              'navigation_id' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'content_id' => 1,
          ),
          1 =>
          array (
              'navigation_id' => 2,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'content_id' => 1,
          ),
          2 =>
          array (
              'navigation_id' => 3,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'content_id' => 1,
          ),
      ));
    }
}
