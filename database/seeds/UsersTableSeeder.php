<?php

use Illuminate\Database\Seeder;

use App\User;

use App\Address;

use App\Post;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::truncate();
    	Address::truncate();
        Post::truncate();

        factory(App\User::class, 10)->create()->each(function($u) {
        	$u->address()->save(factory(App\Address::class)->make());
            
            $post = factory(App\Post::class)->make();

            $post->user()->associate($u);
            $post->save();
        });
    }
}
