<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username'  => 'admin1',
                'full_name' => 'Sean Sarmiento',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier1',
                'full_name' => 'Jason Ramos',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier2',
                'full_name' => 'Mark Zimmerman',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager1',
                'full_name' => 'Liza Soberano',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'security1',
                'full_name' => 'Paolo Pascual',
                'role'      => 'Security',
            ],
        ];

        return view('users', $data);
    }
}