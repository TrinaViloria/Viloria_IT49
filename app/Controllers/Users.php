<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'trina', 'fullname' => 'Trina Marielle', 'role' => 'Manager'],
            ['username' => 'marielle', 'fullname' => 'Marielle Trina', 'role' => 'Cashier'],
            ['username' => 'viloria', 'fullname' => 'Viloria Trina', 'role' => 'Staff'],
            ['username' => 'sky', 'fullname' => 'Sky Viloria', 'role' => 'Supervisor'],
            ['username' => 'astherielle', 'fullname' => 'Astherielle Viloria', 'role' => 'Staff'],
        ];

        return view('users', ['title' => 'User Accounts', 'users' => $users]);
    }
}
