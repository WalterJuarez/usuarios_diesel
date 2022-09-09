<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios_diesel;
use Illuminate\Support\Facades\DB;

class usuarios_diesel_controller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios_diesel = DB::table('usuarios_diesel')->get();
        return $usuarios_diesel;
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
        $usuarios_diesel = new usuarios_diesel();
        $usuarios_diesel->NOMBRE = $request->NOMBRE;
        $usuarios_diesel->APELLIDO = $request->APELLIDO;
        $usuarios_diesel->USUARIO = $request->USUARIO;
        $usuarios_diesel->PASS = $request->PASS;
        $usuarios_diesel->PERMISO_DIESEL = $request->PERMISO_DIESEL;
        $usuarios_diesel->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios_diesel = usuarios_diesel::find($id);
        return $usuarios_diesel;
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
        $usuarios_diesel = usuarios_diesel::find($id);
        $usuarios_diesel->update($request->all());

        return response()->json([
            'message' => "User update successfully!",
            'usuario' => $usuarios_diesel
        ], 200);


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
