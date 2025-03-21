<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DistritoIndexResource extends JsonResource
{
    
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ubigeo'=> $this->ubigeo,
            'nombre'=> $this->nombre,
            'link_info' => route('distritos.show',$this->nombre)
        ];
    }
}