<?php

namespace App\Http\Controllers;
use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Requests\CargoRequest;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
             $cargos= Cargo::Buscar($request->cargo)->OrderBy('id','ASC')->paginate(9);
        return view('admin.cargos.index')->with('lscargos',$cargos);
      //dd($cargos);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.cargos.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoRequest $request)
    {
    $cargo= new Cargo();
    $cargo->cargo = $request->cargo ;
   
    
   
    $cargo->save();
      return redirect()->route('cargos.index',['guarda'=>$cargo->cargo]);
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
          $cargo= Cargo::find($id);
          //dd($cargo);
        return view('admin.cargos.editar')->with('cargo',$cargo);
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
             $cargo= Cargo::find($id);
        $cargo->cargo =$request->cargo ;
       
        
        $cargo->save();
        return redirect()->route('cargos.index',['actualiza'=>$cargo->cargo]); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cargo= Cargo::find($id);
    $cargo->delete();
    return redirect()->route('cargos.index');   //
    }
}
