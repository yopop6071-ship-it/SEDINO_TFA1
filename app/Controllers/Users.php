<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['id' => 1, 'name' => 'Lean'],
            ['id' => 2, 'name' => 'Kurt'],
            ['id' => 3, 'name' => 'Seb'],
            ['id' => 4, 'name' => 'Kharis'],
            ['id' => 5, 'name' => 'Anne'],
        ];

        return view('users', $data);
    }
}