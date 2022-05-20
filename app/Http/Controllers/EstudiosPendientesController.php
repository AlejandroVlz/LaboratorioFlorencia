<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiosusuarios;
use Illuminate\Support\Facades\Storage;
use App\Models\Cuentas;
use Illuminate\Support\Facades\DB;
use App\Models\Estudios;

use App\Mail\EstudioMailable;
use Illuminate\Support\Facades\Mail;

class EstudiosPendientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = trim($request->get('search'));

        $cuentas = Cuentas::all();
    

        

                            $estudios = DB::table('estudiosusuarios')
                            ->select('estudiosusuarios.id', 'estudiosusuarios.usuario_id', 'cuentas.nombre', 'cuentas.celular', 'cuentas.email', 'cuentas.apellido_paterno', 'cuentas.apellido_materno', 'estudiosusuarios.estudio_id', 'estudiosusuarios.estatus', 'estudiosusuarios.file', 'estudiosusuarios.created_at')
                            ->join('cuentas', 'estudiosusuarios.usuario_id', '=', 'cuentas.id')
                            ->latest()
                            ->where('estudiosusuarios.estatus', '=', 'pendiente')
                            ->where('cuentas.nombre', 'LIKE', '%' .$search. '%')
                            ->paginate(10);

                    

        return view ('estudios.estudios_pendientes', compact('estudios', 'search'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudio = Estudiosusuarios::find($id);

        $estudion = Estudios::find( $estudio->estudio_id);

        return view('estudios.estudios_pendientes_actualizar', compact('estudio', 'estudion'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'usuario_id' => 'required',
            'estudio_id'=> 'required',
            'estatus'=> 'required',
            'file'=> 'required'
        ]);

        $estudio = Estudiosusuarios::find($id);
        
        $estudio_file = $request->file('file')->store('public/estudios');
        $file = Storage::url($estudio_file);

        $estudio->usuario_id = $request->usuario_id;
        $estudio->estudio_id = $request->estudio_id;
        $estudio->estatus = $request->estatus;
        $estudio->file = $file;

        $estudio->save();



        $datos = DB::table('estudiosusuarios')
        ->select('estudiosusuarios.id', 'estudiosusuarios.usuario_id', 'cuentas.nombre',  'cuentas.email', 'cuentas.apellido_paterno', 'cuentas.apellido_materno', 'estudiosusuarios.estudio_id', 'estudiosusuarios.estatus', 'estudiosusuarios.file', 'estudiosusuarios.created_at')
        ->join('cuentas', 'estudiosusuarios.usuario_id', '=', 'cuentas.id')
        ->where('estudiosusuarios.id', '=', $estudio->id)
        ->get();

        $estudion = Estudios::find( $estudio->estudio_id);

        
        Mail::to( $datos[0]->email)->send(new EstudioMailable($datos, $estudion));
        
        return redirect()->route('estudios_pendientes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
