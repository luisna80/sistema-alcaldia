<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Detalledepart;
class DetalledepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    $detalledepart= new Detalledepart();
    $detalledepart->trabajador_cedula = $request->trabajador_cedula ;
    $detalledepart->departamento_codigo= $request->departamento_codigo ;
   
   
    $detalledepart->save();
    return redirect()->route('trabajadores.index',[]);
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
    public function edit($cedula)
    {
        //BUSCO SI EL TRABAJADOR YA TIENE DEPARTAMENTO
              $trabajador= DB::select('select * from detalledepartamento where trabajador_cedula= ? ',[$cedula]);

              //SI TIENE DEPARTAMENTO MANDO UN MSG QUE YA TIENE
                if($trabajador){
                    


return redirect()->route('trabajadores.index',['guarda3'=>$trabajador]);
                }else{
//SI NO TIENE DEPARTAMENTOS BUSCO TODOS LOS DEPARTAMENTOS REGISTRADO Y LOS MUESTROS 
                 $departamentos= DB::select('select * from departamentos ');
        
       
      return view('admin.detalledepart.index')->with('trabajador_cedula',$cedula)->with('departamentos',$departamentos);}
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
