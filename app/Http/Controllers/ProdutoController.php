<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function indexView()
    {
        return view('produtos');
    }

    public function index()
    {
        $prods = Produto::all();
        return $prods->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prods = new Produto();
        $prods->nome = $request->input('nome');
        $prods->estoque = $request->input('estoque');
        $prods->preco = $request->input('preco');
        $prods->categoria_id = $request->input('categoria_id');
        $prods->save();
        return json_encode($prods);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prods = Produto::find($id);
        if(isset($prods)){
            return json_encode($prods);
        }
        return response('Produto não encontrado', 404);
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
        $prods = Produto::find($id);
        if(isset($prods)){
            $prods->nome = $request->input('nome');
            $prods->estoque = $request->input('estoque');
            $prods->preco = $request->input('preco');
            $prods->categoria_id = $request->input('categoria_id');
            $prods->save();
            return json_encode($prods);
        }
        return response('Produto não encontrado', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prods = Produto::find($id);
        if(isset($prods)){
            $prods->delete();
            return response('OK', 200);
        }
        return response('ERROR', 404);
    }
}
