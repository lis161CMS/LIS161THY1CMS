<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NavigationtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navigationtypes')->insert([
            'navigationType' => 'Topbar',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_id' => 1,
        ]);
    }
}
