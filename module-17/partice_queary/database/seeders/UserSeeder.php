<?php

namespace Database\Seeders;
use App\Models\User;
use Faker\Core\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersJson = File::get('database/json/users.json');
        $users = collect( json_decode( $usersJson ) );

        $users->each(function ($user) {
            User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'otp'=>$user->otp,
            ]);
        });
    }
}
