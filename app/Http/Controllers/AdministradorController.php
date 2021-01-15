<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function administrador_home()
    {
        $id = Auth::user()->id;
        

        return view('administrador.home');
    }

}
