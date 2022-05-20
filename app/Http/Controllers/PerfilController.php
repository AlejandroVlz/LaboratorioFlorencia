<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Cuentas;
Use App\Models\Estados;
Use App\Models\Municipios;
Use App\Models\Fotos;




class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $id = auth()->user()->id;

        $cuenta = Cuentas::where('cuenta_id', $id)->get();

        $foto = Fotos::where('usuario_id', $id)->get();


        if(count($cuenta) == 0){

            return redirect()->route('datos.index');

        }else{

            $estado = Estados::find($cuenta[0]->estado_id);
            $municipio = Municipios::find($cuenta[0]->municipio_id);
            return view('usuario.perfil', compact('cuenta', 'estado', 'municipio', 'foto'));

        }
    }

    
}
