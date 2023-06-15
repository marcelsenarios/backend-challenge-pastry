<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PedidosResource extends JsonResource
{
    use HasLinks;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'idCliente' => $this->idCliente,
            'idProduto' => $this->idProduto,
            'dataCriacao' => $this->dataCriacao,
            'produto' => $this->produtos,
            'cliente' => $this->clientes,
            '_links' => $this->links()
        ];
    }
}
