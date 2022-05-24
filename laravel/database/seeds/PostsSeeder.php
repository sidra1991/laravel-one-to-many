<?php

use Illuminate\Database\Seeder;
use App\Posts;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            for ($i=0; $i < 50; $i++) {

                $titolo = 'titolo di prova' . $i;

                $newPost = new Posts();
                $newPost->content = $titolo;
                $newPost->title = $titolo;
                $newPost->user_id = rand(1,9);
                $newPost->save();

            }
        }
    }
}
