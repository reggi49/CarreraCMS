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
                'email' => 'admin@mbtech.info',
                'password' => bcrypt('admin')
            ],
            [
                'name' => 'penyungting',
                'email' => 'penyunting@mbtech.info',
                'password' => bcrypt('penyunting')
            ],
            [
                'name' => 'penulis',
                'email' => 'penulis@mbtech.info',
                'password' => bcrypt('penulis')
            ],
        ]);
    }
}
