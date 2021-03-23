<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Detallecargo;

class DetallecargosController extends Controller
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
    $detallecargo= new Detallecargo();
    $detallecargo->trabajador_cedula = $request->trabajador_cedula ;
    $detallecargo->cargo_id = $request->cargo ;
   
   
    $detallecargo->save();
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
        $trabajador= DB::select('select * from detallecargos where trabajador_cedula= ? ',[$cedula]);
                if($trabajador){
                    


return redirect()->route('trabajadores.index',['guarda2'=>$trabajador]);
                }else{
                                 
                

        $cargos= DB::select('select * from cargos ');
        
       
      return view('admin.detallecargos.index')->with('trabajador_cedula',$cedula)->with('cargos',$cargos);}
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
