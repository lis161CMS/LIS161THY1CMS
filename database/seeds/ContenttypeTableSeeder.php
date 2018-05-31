<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContenttypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contenttypes')->insert([
            'contentType' => 'Text',
            'contentTypeDesc' => 'Text Post',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
