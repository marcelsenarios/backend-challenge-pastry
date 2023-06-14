<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pedidos;

class PedidosController extends Controller
{
    public function index()
    {
        return Pedidos::all();
    }

    public function store(Request $request)
    {
        Pedidos::create($request->all());
    }

    public function show($id)
    {
        return Pedidos::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $product = Pedidos::findOrFail($id);
        $product->update($request->all());
    }

    public function destroy($id)
    {
        $product = Pedidos::findOrFail($id);
        $product->delete();
    }
}
