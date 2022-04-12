<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $user = Role::where('slug', 'user')->first();
        $createTasks = Permission::where('slug','create-tasks')->first();
        $manageUsers = Permission::where('slug','admin-users')->first();
        $user1 = new User();
        $user1->name = 'Admin';
        $user1->email = 'admin@admin.com';
        $user1->password = bcrypt('33589791');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($createTasks);
        $user2 = new User();
        $user2->name = 'User';
        $user2->email = 'user@user.com';
        $user2->password = bcrypt('33589791');
        $user2->save();
        $user2->roles()->attach($user);
        $user2->permissions()->attach($manageUsers);

    }
}
