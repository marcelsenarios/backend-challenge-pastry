<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdutosRequest;
use App\Http\Requests\UpdateProdutosRequest;
use App\Http\Resources\ProdutosCollection;
use App\Http\Resources\ProdutosResource;
use App\Models\Produtos;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $query = Produtos::query();
        $produtos = $query->paginate(5);
        $produtosListResource = new ProdutosCollection($produtos);

        return response()->json(
            $produtosListResource
        );
    }


    public function store(StoreProdutosRequest $request): JsonResponse
    {
        $fotoPath = $request->file('foto')->store('public/produtos');
        $req = $request->all();
        $req['foto'] = $fotoPath;

        return response()->json(
            ProdutosResource::make(Produtos::create($req)),
            201
        );
    }

    public function show(int $produtos): JsonResponse
    {
        return response()->json(
            ProdutosResource::make(Produtos::query()->findOrFail($produtos))
        );
    }

    public function update(int $produtos, UpdateProdutosRequest $request): Response
    {
        $req = $request->all();
        $produtos = Produtos::query()->find($produtos);

        if ($produtos && isset($produtos->foto)) {
            Storage::delete($produtos->foto);
        }

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/produtos');
            $req['foto'] = $fotoPath;
        }

        $produtos->update($req);

        return response()->noContent(201);
    }

    public function destroy(int $produtos): Response
    {
        Produtos::destroy($produtos);
        return response()->noContent();
    }
}
