<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(array (
          0 =>
          array (
              'firstName' => 'Admin',
              'middleName' => 'Admin',
              'lastName' => 'Admin',
              'email' => 'admin@email.com',
              'password' => Hash::make('password'),
              'role_id' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ),
          1 =>
          array (
              'firstName' => 'User',
              'middleName' => 'User',
              'lastName' => 'User',
              'email' => 'user@email.com',
              'password' => Hash::make('password'),
              'role_id' => 2,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ),
      ));
    }
}
