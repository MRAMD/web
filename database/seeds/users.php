<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\User::class, 20)->create()->each(function ($u) {
            $u->User->save(factory(App\User::class)->make());
        });
    }
}
