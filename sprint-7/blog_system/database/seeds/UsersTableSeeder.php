<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Muhammad Sidik",
            'email' => "sidik@gmail.com",
            'password' => bcrypt("masukaja")
        ]);
    }
}
