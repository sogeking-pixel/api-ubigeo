<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class DepartamentoModel extends Model
{
    use HasFactory;
    protected $table = 'departamentos'; // Nombre de la tabla

    public $timestamps = false;

    // Especificar los campos que se pueden asignar en masa
    protected $fillable = ['nombre'];

    public function provincias(): HasMany
    {
        return $this->hasMany(ProvinciaModel::class,'departamento_id','id');
    }

    
    public function distritos(): HasManyThrough
    {
        return $this->hasManyThrough(DistritoModel::class, ProvinciaModel::class,'departamento_id','provincia_id','id','id');
    }
    
}