<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DistritoShowResource extends JsonResource
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
            'poblacion'=> $this->poblacion,
            'superficie'=> $this->superficie,
            'x'=> $this->x,
            'y'=> $this->y            
        ];
    }
}