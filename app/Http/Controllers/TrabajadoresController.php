<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajador;
use App\Http\Requests\TrabajadorRequest;
class TrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
  

      $trabajador= Trabajador::Buscar($request->cedula)->OrderBy('cedula','ASC')->paginate(12);
        return view('admin.trabajadores.index')->with('lstrabajadores',$trabajador);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              return view('admin.trabajadores.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrabajadorRequest $request)
    {
        $trabajador= new Trabajador();
  
    $trabajador->nacionalidad = $request->nacionalidad ;
    $trabajador->cedula = $request->cedula ;
    $trabajador->pnombre = $request->pnombre ;
    $trabajador->papellido = $request->papellido ;
    $trabajador->snombre = $request->snombre ;
    $trabajador->sapellido = $request->sapellido ;
    $trabajador->genero = $request->genero ;
    $trabajador->fecha_nac = $request->fecha_nac ;
    $trabajador->tlf_casa = $request->tlf_casa ;
    $trabajador->tlf_personal = $request->tlf_personal ;
    $trabajador->tlf_oficina = $request->tlf_oficina ;
    $trabajador->direccion = $request->direccion ;
    $trabajador->edo_civil = $request->edo_civil ;
    $trabajador->estado = $request->estado ;
    $trabajador->municipio = $request->municipio ;
    $trabajador->parroquia = $request->parroquia ;
   
    $trabajador->fecha_ingreso= $request->fecha_ingreso;
    $trabajador->banco = $request->banco ;
    $trabajador->ncuenta = $request->ncuenta ;
    $trabajador->correo_inst = $request->correo_inst ;
    $trabajador->correo_per = $request->correo_per ;
    
   
    $trabajador->save();
      return redirect()->route('trabajadores.index',['guarda'=>$trabajador->nombre]);

      
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
