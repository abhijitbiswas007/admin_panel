<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$scIIba2sXQx2tvJOTynEOO44QHy9bOmAsZ6D3qaA8PlskEkEjYjYS',
                'remember_token' => null,
                'created_at'     => '2019-09-19 13:22:51',
                'updated_at'     => '2019-09-19 13:22:51',
            ],
        ];

        User::insert($users);
    }
}
