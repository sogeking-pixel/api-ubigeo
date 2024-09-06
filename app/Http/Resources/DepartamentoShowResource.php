<?php

namespace App\Http\Resources;

use App\Models\DepartamentoModel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartamentoShowResource extends JsonResource
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
            'num_provincias' => $this->provincias()->count(),
            'num_distritos' =>  $this->distritos()->count()
        ];
    }
}