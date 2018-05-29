<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => '1',
                'role' => 'User',
                'roleShortName' => 'User',
            ),
            1 => 
            array (
                'id' => '2',
                'role' => 'Administrator',
                'roleShortName' => 'Admin',
            ),
        ));

    }
}
