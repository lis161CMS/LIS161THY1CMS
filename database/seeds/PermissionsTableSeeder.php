<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('permissions')->insert(array (
          0 =>
          array (
              'id' => 1,
              'permission' => 'View Content',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 2,
          ),
          1 =>
          array (
              'id' => 2,
              'permission' => 'Add Content',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 2,
          ),
          2 =>
          array (
              'id' => 3,
              'permission' => 'View Own Content',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 2,
          ),
          3 =>
          array (
              'id' => 4,
              'permission' => 'View Content',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 1,
          ),
          4 =>
          array (
              'id' => 5,
              'permission' => 'Add Content',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 1,
          ),
          5 =>
          array (
              'id' => 6,
              'permission' => 'View Own Content',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 1,
          ),
          6 =>
          array (
              'id' => 7,
              'permission' => 'User Management',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 1,
          ),
          7 =>
          array (
              'id' => 8,
              'permission' => 'Edit User Navigations',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 1,
          ),
          8 =>
          array (
              'id' => 9,
              'permission' => 'View Permissions',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'role_id' => 1,
          ),
      ));
    }
}
