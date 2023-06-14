<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clientes;


class ClientesController extends Controller
{
    public function index()
    {
        return Clientes::all();
    }

    public function store(Request $request)
    {
        Clientes::create($request->all());
    }

    public function show($id)
    {
        return Clientes::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $product = Clientes::findOrFail($id);
        $product->update($request->all());
    }

    public function destroy($id)
    {
        $product = Clientes::findOrFail($id);
        $product->delete();
    }
}
