<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ContenttypeTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(RevisionsTableSeeder::class);
        $this->call(NavigationtypeTableSeeder::class);
        $this->call(NavigationsTableSeeder::class);
        $this->call(NavigationcontentsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
    }
}
