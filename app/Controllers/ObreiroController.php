<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ObreiroController extends BaseController
{
    public function index()
    {
        $data = [
            'breadcrump' => 'Obreiro', 
            'modal_title' => 'Adicionar Obreiro' 
        ];
        return view('Obreiro/index', $data);
    }
}
