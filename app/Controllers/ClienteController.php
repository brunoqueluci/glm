<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ClienteController extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Clientes'
        ];
        return view('cliente/Index', $data);
    }
}
