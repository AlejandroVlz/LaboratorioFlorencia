<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuentas;
use Illuminate\Support\Facades\DB;


class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estudios.busqueda');
    }

    public function estudio(Request $request)
    {
        $search = trim($request->get('search'));

        $cuentas = Cuentas::all();


    
        $resultados = DB::table('cuentas')
                            ->select('id', 'nombre', 'apellido_paterno', 'apellido_materno', 'email', 'celular', 'cuenta_id')
                            ->where('cuenta_id', 'LIKE', '%' .$search. '%')
                            ->orwhere('nombre', 'LIKE', '%' .$search. '%')
                            ->orderBy('nombre', 'asc')
                            ->paginate(5);


                    
                            
        return view('estudios.busqueda', compact('resultados', 'search'));
    }


    public function destroy($id)
    {
        $cuentas = Cuentas::find($id);
        $cuentas->delete();

        return redirect()->route('estudios.index');


    }

    
}
