<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financiamento extends Model
{
    use HasFactory;

    protected $table = "financiamentos";
    //app/Models/
    protected $fillable = [
        "nome",
        "taxa",

    ];

    public function automoveis(){
        return $this->belongsToMany(Automovel::class);
    }
}
