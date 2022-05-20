<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiosusuarios;
use App\Models\Cuentas;
use App\Models\Estados;
use App\Models\Municipios;
use App\Models\VerEstudios;
use App\Models\Estudios;


use App\Mail\EstudioMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Storage;

class EstudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuentas::paginate(8);
    
        return view('estudios.datos_us', compact('cuentas'));
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

        if($request->file){

            $estudio = $request->file('file')->store('public/estudios');
            $file = Storage::url($estudio);
    
    
            Estudiosusuarios::create([
                
                'usuario_id' => $request->usuario_id,
                'estudio_id' => $request->estudio_id,
                'estatus' => $request->estatus,
                'file' => $file
    
            ]);
        }else{


            $estudios = new Estudiosusuarios;
            $estudios->usuario_id = $request->usuario_id;
            $estudios->estudio_id = $request->estudio_id;
            $estudios->estatus = $request->estatus;
    
            $estudios->save();
            

            $datos = DB::table('estudiosusuarios')
            ->select('estudiosusuarios.id', 'estudiosusuarios.usuario_id', 'cuentas.nombre', 'cuentas.celular', 'cuentas.email', 'cuentas.apellido_paterno', 'cuentas.apellido_materno', 'estudiosusuarios.estudio_id', 'estudiosusuarios.estatus', 'estudiosusuarios.file', 'estudiosusuarios.created_at')
            ->join('cuentas', 'estudiosusuarios.usuario_id', '=', 'cuentas.id')
            ->where('estudiosusuarios.id', '=', $estudios->id)
            ->get();

            $estudion = Estudios::find( $estudios->estudio_id);
            

            Mail::to( $datos[0]->email)->send(new EstudioMailable($datos, $estudion));


        }

        return redirect()->route('estudios_pendientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudios = Estudios::all();
        $cuenta = Cuentas::find($id);
        $estado = Estados::find($cuenta->estado_id);
        $municipio = Municipios::find($cuenta->estado_id);

        $estudio = VerEstudios::where('usuario_id', $cuenta->id)->get();



        return view('estudios.estudios_registro', compact('cuenta', 'estado', 'municipio', 'estudio', 'estudios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
