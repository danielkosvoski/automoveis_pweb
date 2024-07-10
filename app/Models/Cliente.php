<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";
    //app/Models/
    protected $fillable = [

    "nome",
    "cpf",
    "endereco",
    "contato",
    "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
