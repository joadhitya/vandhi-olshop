<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create( [
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt("admin"),
            'remember_token' => Str::random(50)
        ] );
    }
}
