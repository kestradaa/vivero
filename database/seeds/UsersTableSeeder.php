<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->lastname = 'Pruebas';
        $user->email = 'test@example.com';
        $user->username = 'test';
        $user->password = '123456';
        $user->save();
    }
}
