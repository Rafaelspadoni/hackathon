<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\empresa;



class EmpresasController extends Controller
{
    
    public function empresa()
    {
        return view('empresas.empresa')
    }
}
