<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all data
        DB::table('posts')->truncate();

        //generate dummy data
        $posts = [];
        $date = Carbon::create(2017, 4, 3, 9);

        for($i=1;$i<=10;$i++)
        {
            $image = "Post_Image_".rand(1,5).".jpg";
            $date->addDays($i);
            $publishedDate = clone($date);
            $createdDate = clone($date);

            $posts[] =[
                'author_id' =>rand(1,3),
                'title' => $i."Regional Response Architect",
                'excerpt' => $i."Gorczany Via",
                'body' => $i."Et voluptatem veniam necessitatibus. Dolores qui explicabo quisquam deleniti vel. Veniam officia et iure. Facere sed possimus molestiae dolores doloremque accusantium beatae. Aperiam tempore itaque quasi vero quidem incidunt. Illum velit quia.",
                'slug' => $i."omnis-aut-non",
                'image' => rand(0,1) == 1? $image:NULL,
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
                'published_at' => $i > 5 ?$publishedDate : (rand(0,1) == 0 ? null : $publishedDate->addDays($i+4)),
                'view_count' => rand(1,10)*10,
            ];
        }
        DB::table('posts')->insert($posts);
    }
}
