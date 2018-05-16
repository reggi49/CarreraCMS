<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesTableSeeder extends Seeder
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
        DB::table('pages')->truncate();

        //generate 3 author
        DB::table('pages')->insert([
            [
                'title' => 'About',
                'slug' => 'about',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
            [
                'title' => 'General Information',
                'slug' => 'General Information',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
            [
                'title' => 'Product Advantage',
                'slug' => 'product-advantage',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
            [
                'title' => 'Pedoman Media Siber',
                'slug' => 'pedoman-media-siber',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
            [
                'title' => 'Price',
                'slug' => 'price',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
            [
                'title' => 'Harga Jok Mobil',
                'slug' => 'harga-jok-mobil',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
            [
                'title' => 'Harga Jok Motor',
                'slug' => 'harga-jok-motor',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
            [
                'title' => 'Harga Sofa',
                'slug' => 'Harga-sofa',
                'body' => 'admin Eius quidem molestiae qui incidunt dolores. Quae et et alias saepe. Earum quos odio. Dicta commodi nesciunt modi quisquam.',
            ],
        ]);
    }
}
