<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['name' => 'Trina Marielle', 'email' => 'trinamarielle@gmail.com', 'phone' => '0977-123-4567'],
            ['name' => 'Kurt Hienrich', 'email' => 'kurthienrich@gmail.com', 'phone' => '0911-234-5678'],
            ['name' => 'Maryclaire Jashley', 'email' => 'maryclaire@gmail.com', 'phone' => '0922-345-6789'],
            ['name' => 'Jovs Mark', 'email' => 'jovsmark@gmail.com', 'phone' => '0933-456-7890'],
            ['name' => 'Ivan Andrew', 'email' => 'ivanandrew@gmail.com', 'phone' => '0944-567-8910'],
        ];

        return view('customers', ['title' => 'Customer Accounts', 'customers' => $customers]);
    }
}
