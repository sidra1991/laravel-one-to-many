<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) {
            $newUser = new User();
            $newUser->name = 'Acaunt di prova' . $i;
            $newUser->email = 'Email@prova.di' . $i;
            $newUser->password = '12345678';
            $newUser->save();
        }
    }
}
