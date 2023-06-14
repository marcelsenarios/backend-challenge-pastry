<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produtos;


class ProdutosController extends Controller
{
    public function index()
    {
        return Produtos::all();
    }

    public function store(Request $request)
    {
        Produtos::create($request->all());
    }

    public function show($id)
    {
        return Produtos::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $product = Produtos::findOrFail($id);
        $product->update($request->all());
    }

    public function destroy($id)
    {
        $product = Produtos::findOrFail($id);
        $product->delete();
    }
}
