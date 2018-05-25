<?php

use Illuminate\Database\Seeder;

class PostTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_types')->truncate();

        DB::table('post_types')->insert([
            [
                'name' => 'standard',
            ],
            [
                'title' => 'gambar',
            ],
            [
                'title' => 'video',
            ],
        ]);
    }
}
