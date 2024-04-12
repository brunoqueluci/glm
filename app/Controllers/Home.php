<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'breadcrump' => 'dashboard'
        ];
        return view('Admin_Home', $data);
    }
}
