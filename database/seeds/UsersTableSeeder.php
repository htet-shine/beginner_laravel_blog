<?php

use App\User;
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
        $user_1 = new User;

				$user_1->name = 'Michael Woods';
				$user_1->email = 'mw@email.com';
				$user_1->password = bcrypt('123');
				$user_1->save();

        $user_2 = new User;

				$user_2->name = 'Lauren Smith';
				$user_2->email = 'ls@email.com';
				$user_2->password = bcrypt('123');
				$user_2->save();

    }
}
