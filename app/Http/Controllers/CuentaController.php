<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estados;
use App\Models\Municipios;
use App\Models\Cuentas;
use App\Models\Fotos;




class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estados::all();
        $municipios = Municipios::all();
        $id = auth()->user()->id;
        $foto = Fotos::where('usuario_id', $id)->get();

        
        return view('usuario.datos', compact('estados', 'municipios', 'foto'));
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
        
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno'=> 'required',
            'apellido_materno'=> 'required',
            'sexo'=> 'required',
            'fecha_nacimiento'=> 'required',
            'CURP'=> 'required',
            'celular'=> 'required',
            'email'=> 'required',
            'estado_id'=> 'required',
            'municipio_id'=> 'required',
            'localidad'=> 'required',
            'cuenta_id'=> 'required'
        ]);



        $cuenta = new Cuentas;

        $cuenta->nombre = $request->nombre;
        $cuenta->apellido_paterno = $request->apellido_paterno;
        $cuenta->apellido_materno = $request->apellido_materno;
        $cuenta->sexo = $request->sexo;
        $cuenta->fecha_nacimiento = $request->fecha_nacimiento;
        $cuenta->CURP = $request->CURP;
        $cuenta->celular = $request->celular;
        $cuenta->email = $request->email;
        $cuenta->estado_id = $request->estado_id;
        $cuenta->municipio_id = $request->municipio_id;
        $cuenta->localidad = $request->localidad;
        $cuenta->cuenta_id = $request->cuenta_id;
        
        
        $id = auth()->user()->id;

        $cuentas = Cuentas::where('cuenta_id', $id)->get();

        
        if(count($cuentas)==0){
            
            $cuenta->save();
            
            return redirect()->route('perfil.index');
            
        }else{
            
             return back()->withErrors([
                 'message' => 'Los datos ya has sido registrados anteriormente',
             ]);
            
        }
        



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        

        $estados = Estados::all();
        $municipios = Municipios::all();
        $cuenta = Cuentas::where('cuenta_id', $id)->get();

        $foto = Fotos::where('usuario_id', $id)->get();


        if(count($cuenta) == 0){

            return redirect()->route('datos.index');

        }else{

            return view('usuario.editar', compact('estados', 'municipios', 'cuenta', 'foto'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuentas $cuenta)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno'=> 'required',
            'apellido_materno'=> 'required',
            'sexo'=> 'required',
            'fecha_nacimiento'=> 'required',
            'CURP'=> 'required',
            'celular'=> 'required',
            'email'=> 'required',
            'estado_id'=> 'required',
            'municipio_id'=> 'required',
            'localidad'=> 'required',
            'cuenta_id'=> 'required'
        ]);

        $cuenta->nombre = $request->nombre;
        $cuenta->apellido_paterno = $request->apellido_paterno;
        $cuenta->apellido_materno = $request->apellido_materno;
        $cuenta->sexo = $request->sexo;
        $cuenta->fecha_nacimiento = $request->fecha_nacimiento;
        $cuenta->CURP = $request->CURP;
        $cuenta->celular = $request->celular;
        $cuenta->email = $request->email;
        $cuenta->estado_id = $request->estado_id;
        $cuenta->municipio_id = $request->municipio_id;
        $cuenta->localidad = $request->localidad;
        $cuenta->cuenta_id = $request->cuenta_id;


        $cuenta->save();


         return redirect()->route('perfil.index');
         


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
