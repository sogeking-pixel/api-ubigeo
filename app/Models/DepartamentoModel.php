<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DepartamentoModel extends Model
{
    use HasFactory;
    protected $table = 'departamento'; // Nombre de la tabla

    public $timestamps = false;

    // Especificar los campos que se pueden asignar en masa
    protected $fillable = ['nombre'];

    public function provincias(): HasMany
    {
        return $this->hasMany(ProvinciaModel::class,'departamento_id','id');
    }
}
