<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    public function run()
    {
        $users = array(
            [
                'name' => 'Juan Diego Pimentel',
                'email' => 'tenjo2001@gmail.com',
                'password' => \Hash::make('123456')
            ]
        );

        foreach ($users as $user){
            User::updateOrCreate($user);
        }

    }
}
