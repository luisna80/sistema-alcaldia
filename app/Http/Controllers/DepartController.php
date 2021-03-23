<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoRequest;
use Illuminate\Support\Facades\DB;
use App\Departamento;
class DepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $grupos= Departamento::OrderBy('nombre','ASC')->paginate(9);
        return view('admin.departamentos.index')->with('lsdepartamentos',$grupos);   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.departamentos.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoRequest $request)
    {
            $grupo= new Departamento();
  
    $grupo->nombre = $request->nombre ;
   $grupo->codigo = $request->codigo ;
   
    $grupo->save();
      return redirect()->route('departamentos.index',['guarda'=>$grupo->nombre]);
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
    public function edit($codigo)
    {
       // $grupo= Departamento::find($id);
          //dd($grupo);
        //return view('admin.departamentos.editar')->with('departamento',$grupo);

            $grupo = DB::table('departamentos')->where('codigo', '=', $codigo)->first();

        return view('admin.departamentos.editar')->with('departamento',$grupo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codigo)
    {
        //$departamento= Departamento::find($id);
     
        //$departamento->nombre =$request->nombre ;
      
        //$departamento->save();
        //return redirect()->route('departamentos.index',['actualiza'=>$departamento->nombre]);

                $grupo=DB::table('departamentos')
            ->where('codigo', $codigo)
            ->update(['nombre' => $request->nombre]); 
  
       return redirect()->route('departamentos.index',['actualiza'=>$request->nombre]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($codigo)
    {
     $grupo=DB::table('departamentos')->where('codigo', $codigo)
            ->delete(); 
    //$departamento= Departamento::find($codigo);
    //$departamento->delete();

    return redirect()->route('departamentos.index');
    }
}
