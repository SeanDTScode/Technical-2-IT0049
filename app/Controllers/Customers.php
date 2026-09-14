<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Cara Delima',
                'email'     => 'cara@example.com',
                'phone'     => '09171234567',
            ],
            [
                'full_name' => 'Miriam Santiago',
                'email'     => 'miriam@example.com',
                'phone'     => '09181234567',
            ],
            [
                'full_name' => 'Ty Lou',
                'email'     => 'ty@example.com',
                'phone'     => '09191234567',
            ],
            [
                'full_name' => 'Steph Curry',
                'email'     => 'stepg@example.com',
                'phone'     => '09201234567',
            ],
            [
                'full_name' => 'Jalen Brunson',
                'email'     => 'jalen@example.com',
                'phone'     => '09211234567',
            ],
        ];

        return view('customers', $data);
    }
}