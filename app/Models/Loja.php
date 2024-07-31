<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;

    protected $table = "lojas";
    //app/Models/
    protected $fillable = [

    "nome",
    "cnpj",
    "endereco",
    "email",
    "contato",
    "automovel_id"
    ];

    protected $casts = [
        'automovel_id'=>'integer'
    ];

    public function automovel(){

        return $this->hasMany(Automovel::class, 'automovel_id');
    }
}
