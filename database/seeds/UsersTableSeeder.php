<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$JRPWaLW9uEGYhJbD1hbI7O9CnhIJW/QI11RdkoLOEhaauPbfUphiq',
            'remember_token' => null,
            'created_at'     => '2019-04-30 11:21:18',
            'updated_at'     => '2019-04-30 11:21:18',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
