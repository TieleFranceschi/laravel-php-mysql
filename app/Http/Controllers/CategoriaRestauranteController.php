<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaRestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoriaRestaurante::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return CategoriaRestaurante::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                //se não encontrar o aluno, retorna resposta no formato json
        if(!$categoria = CategoriaRestaurante::find($id))
            return response()->json(['error' => 'Categoria informada não encontrada'], 404);
        return $categoria;
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
         //se não encontrar o aluno, retorna resposta no formato json
        if(!$categoria = CategoriaRestaurante::find($id))
            return response()->json(['error' => 'Categoria informada não encontrada'], 404);

        $categoria->update($request->only('name'));

        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //se não encontrar o aluno, retorna resposta no formato json
        if(!$categoria = CategoriaRestaurante::find($id))
            return response()->json(['error' => 'Categoria informada não encontrada'], 404);

        $categoria->delete();
    }
}
