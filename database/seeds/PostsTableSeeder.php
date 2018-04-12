<?php

use Illuminate\Database\Seeder;

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

        for($i=1;$i<=10;$i++)
        {
            $image = "Posts_Image_".rand(1,5).".jpg";
            $date = date("Y-m-d H:i:s", strtotime("2018-07-18 08:00:00"));

            $posts[] =[
                'author_id' =>rand(1,3),
                'title' => "Regional Response Architect{i}",
                'excerpt' => "Gorczany Via{i}",
                'body' => "{i} Et voluptatem veniam necessitatibus. Dolores qui explicabo quisquam deleniti vel. Veniam officia et iure. Facere sed possimus molestiae dolores doloremque accusantium beatae. Aperiam tempore itaque quasi vero quidem incidunt. Illum velit quia.",
                'slug' => $i."omnis-aut-non",
                'image' => rand(0,1) == 1? $image:NULL,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }
        DB::table('posts')->insert($posts);
    }
}
