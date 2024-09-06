<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartamentoIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nombre'=> $this->nombre,
            'link_info' => route('departamentos.show',$this->nombre),
            'link_provincias' =>route('departamentos.provincias.index',$this->nombre) 
        ];
    }
}