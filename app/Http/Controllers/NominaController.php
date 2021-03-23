<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nomina;
class NominaController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codigo=$_GET['cedula'];
         $nominas= Nomina::Buscar($codigo)->OrderBy('id','ASC')->paginate(9);
        //$nominas= Nomina::OrderBy('id','ASC')->paginate(9);
       return view('admin.nominas.index')->with('lsnominas',$nominas)->with('codigo',$codigo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$codigo=$_GET['cedula'];
       
      return view('admin.nominas.nuevo');
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
        $nominas= Nomina::OrderBy('id','ASC')->paginate(9);
       return view('admin.nominas.nom-emp-contratado')->with('lsnominas',$nominas);
       
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
