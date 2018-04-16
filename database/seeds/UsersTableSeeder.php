<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all data
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 3 author
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'slug' => 'ad-min',
                'email' => 'admin@mbtech.info',
                'password' => bcrypt('admin'),
                'bio' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
                'avatar' => 'avatar1.jpg'                
            ],
            [
                'name' => 'penyungting',
                'slug' => 'penyung-ting',                
                'email' => 'penyunting@mbtech.info',
                'password' => bcrypt('penyunting'),
                'bio' => 'penyungting Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
                'avatar' => 'avatar2.jpg'                                
            ],
            [
                'name' => 'penulis',
                'slug' => 'penu-lis',
                'email' => 'penulis@mbtech.info',
                'password' => bcrypt('penulis'),
                'bio' => 'penulis Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
                'avatar' => 'avatar3.jpg'                                             
            ],
        ]);
    }
}
