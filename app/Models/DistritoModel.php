<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistritoModel extends Model
{
    use HasFactory;
    protected $table = 'distrito'; // Nombre de la tabla

    public $timestamps = false;

    // Especificar los campos que se pueden asignar en masa
    protected $fillable = ['ubigeo','nombre', 'provincia_id','poblacion','superficie','x','y'];
}
