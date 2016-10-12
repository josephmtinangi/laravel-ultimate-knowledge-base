<?php

use Illuminate\Database\Seeder;

use App\User;

use App\Address;

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

        factory(App\User::class, 10)->create()->each(function($u) {
        	$u->address()->save(factory(App\Address::class)->make());
        });
    }
}
