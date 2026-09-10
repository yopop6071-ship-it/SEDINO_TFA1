<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['id' => 1, 'name' => 'Kulleh'],
            ['id' => 2, 'name' => 'Jereh'],
            ['id' => 3, 'name' => 'Ice'],
            ['id' => 4, 'name' => 'Charles'],
            ['id' => 5, 'name' => 'Sean'],
        ];

        return view('customers', $data);
    }
}