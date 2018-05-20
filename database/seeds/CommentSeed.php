<?php

use Illuminate\Database\Seeder;

class CommentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Comment::class, 20)->create()->each(function ($u) {
            $u->comment->save(factory(App\Comment::class)->make());
        });
    }
}
