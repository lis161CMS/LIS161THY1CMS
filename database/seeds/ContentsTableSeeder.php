<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'contentTitle' => 'Welcome!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'contentType_id' => 1,
            'user_id' => 1,
        ]);
    }
}
