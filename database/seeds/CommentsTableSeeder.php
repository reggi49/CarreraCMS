<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments= [];
        $posts = Post::published()->latest()->take(5)->get();
        foreach ($posts as $post)
        {
            for ($i = 1; $i <=rand(1,10); $i++)
            {
                $commentDate = $post->published_at->modify("+{$i} hours");
                $comments[] = [
                    'author_name' => "Nils {$i}",
                    'author_email' =>"Lily.Reilly{$i}@yahoo.com",
                    'author_url' => "https://verner{$i}.org",
                    'body' => "{$i}Sit et natus veritatis deserunt. Voluptas quibusdam temporibus dolores natus reprehenderit laudantium. Et sit voluptatum molestiae aliquid dolores quam reprehenderit repellendus. Mollitia velit voluptas laborum. Facilis illo officiis sit.olores sunt eos",
                    'post_id' => $post->id,
                    'created_at' => $commentDate,
                    'updated_at' => $commentDate,
                ];
            }
        }
        Comment::truncate();
        Comment::insert($comments);
    }
}
