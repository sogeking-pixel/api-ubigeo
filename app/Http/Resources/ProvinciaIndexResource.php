<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProvinciaIndexResource extends JsonResource
{
    protected $departamento_name;

    public function __construct($resource, $departamento_name)
    {
        parent::__construct($resource);
        $this->departamento_name = $departamento_name;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'nombre'=> $this->nombre,
            'link_info' => route('provincias.show',$this->nombre),
            'link_distritos' =>route('departamentos.provincias.distritos.index',['departamento'=>$this->departamento_name,'provincia'=>$this->nombre]) 
        ];
    }
}