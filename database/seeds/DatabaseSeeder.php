<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Silber\Bouncer\Database\Ability;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Sample user
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('secret')
        ]);

        // Sample role
        $role = Role::create([
            'name' => 'admin',
            'title' => 'admin'
        ]);

        // Sample ability
        $ability = Ability::create([
            'name' => 'publish_post',
            'title' => 'publish_post'
        ]);

        // Grant permissions
        Bouncer::allow($role->name)->to($ability->name);
        Bouncer::assign($role->name)->to($user);
    }
}
