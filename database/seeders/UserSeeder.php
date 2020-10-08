<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Maxime Graindor',
            'email' => 'maxime.graindor@hotmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('testAuth'),
            'remember_token' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        User::insert([
            'name' => 'Jean Dubois',
            'email' => 'jean.dubois@hotmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('testAuth'),
            'remember_token' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        User::insert([
            'name' => 'Pierre Durand',
            'email' => 'pierre.durand@hotmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('testAuth'),
            'remember_token' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
