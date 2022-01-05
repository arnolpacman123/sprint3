<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'encuestas';
    
    protected $guarded = [];
    
    public function aplicaciones_encuestas()
    {
        return $this->hasMany(AplicacionEncuesta::class);
    }

    public function secciones()
    {
        return $this->hasMany(Seccion::class);
    }
}
