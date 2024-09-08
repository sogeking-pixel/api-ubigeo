<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProvinciaModel extends Model
{
    use HasFactory;
    protected $table = 'provincias'; // Nombre de la tabla

    public $timestamps = false;

    // Especificar los campos que se pueden asignar en masa
    protected $fillable = ['nombre', 'departamento_id'];

    public function distritos(): HasMany
    {
        return $this->hasMany(DistritoModel::class,'provincia_id','id');
    }

}