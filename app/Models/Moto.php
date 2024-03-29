<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    use HasFactory;

    protected $table = "motos";
    //app/Models/
    protected $fillable = [

    "modelo",
    "marca_id",
    "ano",
    "km",
    "cor",
    "combustivel",
    "valor",
    "cidade",
    "imagem",
    ];

    protected $casts = [
        'marca_id'=>'integer'
    ];

    public function marca(){

        return $this->belongsTo(Marca::class, 'marca_id');
    }
}
