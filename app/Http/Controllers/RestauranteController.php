<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = CategoriaRestaurante::with('restaurantes')->find($id);
        return $categoria;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$categoria = CategoriaRestaurante::find($id))
        return response()->json(['error' => 'Categoria informada não encontrada'], 404);

        return $categoria->restaurantes()->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = CategoriaRestaurante::with(['restaurantes',function ($query) use ($restaurante_id){
            $query->where('id', $restaurante_id);
        }])->find($categoria_id);
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
        if(!$categoria = CategoriaRestaurante::find($categoria_id))
            return response()->json(['error' => 'Categoria informada não encontrada'], 404);

        if(!$restaurante = $categoria->restaurantes()->find($restaurante_id))
             return response()->json(['error' => 'Restaurante informado não encontrado'], 404);

        $restaurante->update($request->only('desc_restaurante'));

        return $restaurante;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$categoria = CategoriaRestaurante::find($categoria_id))
            return response()->json(['error' => 'Categoria informada não encontrada'], 404);

        if(!$restaurante = $categoria->restaurantes()->find($restaurante_id))
             return response()->json(['error' => 'Restaurante informado não encontrado'], 404);

        $restaurante->delete();

        return $restaurante;
    }
}
