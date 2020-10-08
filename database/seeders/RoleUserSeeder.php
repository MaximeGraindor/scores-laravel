<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::where('email', 'maxime.graindor@hotmail.com')->first();
        $roleId = Role::where('name', 'superAdmin')->first()->id;
        $user->roles()->attach($roleId);


        RoleUser::insert([
            'user_id' => '1',
            'role_id' => '2'
        ]);

        RoleUser::insert([
            'user_id' => '2',
            'role_id' => '2'
        ]);
    }
}
