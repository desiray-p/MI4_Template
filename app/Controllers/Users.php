<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'thor',
                'full_name' => 'Thor Odinson',
                'role' => 'Manager'
            ],
            [
                'username' => 'tony',
                'full_name' => 'Tony Stark',
                'role' => 'Administrator'
            ],
            [
                'username' => 'natasha',
                'full_name' => 'Natasha Romanoff',
                'role' => 'Cashier'
            ],
            [
                'username' => 'wanda',
                'full_name' => 'Wanda Maximoff',
                'role' => 'Cashier'
            ],
            [
                'username' => 'strange',
                'full_name' => 'Stephen Strange',
                'role' => 'Staff'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}