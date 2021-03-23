<?php

namespace App\Http\Controllers;
use App\Http\Requests\GrupoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Grupo;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         

            $grupos= Grupo::OrderBy('nombre','ASC')->paginate(9);
        return view('admin.grupos.index')->with('lsgrupos',$grupos);   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.grupos.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoRequest $request)
    {
    $grupo= new Grupo();
    $grupo->codigo = $request->codigo ;
    $grupo->nombre = $request->nombre ;
   
   
    $grupo->save();
      return redirect()->route('grupos.index',['guarda'=>$grupo->codigo]);
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
    $grupo = DB::table('grupos')->where('codigo', '=', $codigo)->first();
 
          // $grupo = Grup::select('select * from users where active = ?', [1]);
//dd($grupo->codigo);
       //$grupo= Grupo::find($codigo);
          //dd($grupo);
        return view('admin.grupos.editar')->with('grupo',$grupo);
        //return view('admin.grupos.editar', ['grupo' => $grupo]);


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
        $grupo=DB::table('grupos')
            ->where('codigo', $codigo)
            ->update(['nombre' => $request->nombre]); 
        //$grupo=DB::table('update GRUPOS set nombre = $request->nombre where codigo = $codigo', ['$codigo']); 
        //$grupo= Grupo::find($codigo);
        
        //$grupo->nombre =$request->nombre ;
      //dd($grupo);
        //$grupo->save();
       return redirect()->route('grupos.index',['actualiza'=>$request->nombre]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //$grupo= Grupo::find($id);
    //$grupo->delete();
         $grupo=DB::table('grupos')->where('codigo', $id)
            ->delete(); 
    return redirect()->route('grupos.index');
    }
}
