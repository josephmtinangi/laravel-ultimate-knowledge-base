<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::offset(1)->first();
        $role = App\Role::whereName('admin')->first();
        // assign a role to a user
        $user->roles()->attach($user->id);
    }
}
