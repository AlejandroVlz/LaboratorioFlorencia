<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EstudioMailable;
use Illuminate\Support\Facades\Mail;

use App\Models\Estudiosusuarios;
use Illuminate\Support\Facades\Storage;
use App\Models\Cuentas;
use Illuminate\Support\Facades\DB;


class EmailController extends Controller
{
    public function index(){


        $estudios = DB::table('estudiosusuarios')
        ->select('estudiosusuarios.usuario_id', 'cuentas.email')
        ->join('cuentas', 'estudiosusuarios.usuario_id', '=', 'cuentas.id')
        ->where('usuario_id', '=' 1)
        ->get();

        $correo = new EstudioMailable;

        Mail::to('alexvlzm10@gmail.com')->send($correo);
        return $estudios;

    }
}
