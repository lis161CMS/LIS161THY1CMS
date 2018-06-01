<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RevisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('revisions')->insert([
            'content' => 'This is the first post. Try creating a post!',
            'revisionNo' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'content_id' => 1,
            'user_id' => 1,
        ]);
    }
}
