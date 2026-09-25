<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Thor Odinson',
                'email' => 'thor@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Tony Stark',
                'email' => 'tony@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Natasha Romanoff',
                'email' => 'natasha@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Wanda Maximoff',
                'email' => 'wanda@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Stephen Strange',
                'email' => 'stephen@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', ['customers' => $customers]);
    }
}