<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerEstudios;
use App\Models\Cuentas;
use App\Models\Fotos;




class VerEstudiosController extends Controller
{
    
    
    function index(){

        $id = auth()->user()->id;
        $cuentas = Cuentas::where('cuenta_id', $id)->get();
        $estudio = VerEstudios::where('usuario_id', $cuentas[0]->id)->get();
        $foto = Fotos::where('usuario_id', $id)->get();
        

        return view('usuario.estudios_usuario', compact('estudio', 'foto'));


    }
}
