<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
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
        DB::table('members')->truncate();

        //generate 3 author
        DB::table('members')->insert([
            [
                'name' => 'user satu',
                'slug' => 'user-satu',
                'email' => 'usersatu@mbtech.info',
                'password' => bcrypt('usersatu'),
                'bio' => 'user satu Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
                'address' => 'alamat user satu Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
                'avatar' => 'avatar1.jpg'                
            ],
            [
                'name' => 'user dia',
                'slug' => 'user-dua',                
                'email' => 'userdua@mbtech.info',
                'password' => bcrypt('userdua'),
                'bio' => 'user dua Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
                'address' => 'alamat user dua Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
                'avatar' => 'avatar2.jpg'                                
            ],
        ]);
    }
}
