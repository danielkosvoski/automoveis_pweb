<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovel extends Model
{
    use HasFactory;

    protected $table = "automoveis";
    //app/Models/
    protected $fillable = [
        "modelo",
        "marca_id",
        "ano",
        "km",
        "cor",
        "combustivel",
        "cambio",
        "valor",
        "cidade",
        "loja_id",
        "financiamento_id",
        "imagem",
    ];

    protected $casts = [
        'financiamento_id' => 'integer',
        'marca_id' => 'integer',
        'loja_id' => 'integer'
    ];

    public function financiamentos()
    {
        return $this->belongsToMany(Financiamento::class, 'financiamento_id');
    }


    public function marca()
    {

        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function loja()
    {

        return $this->belongsTo(Loja::class, 'loja_id');
    }
}
