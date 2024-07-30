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
        "automovel_id",
    ];

    protected $casts = [
        'automovel_id' => 'integer',
   
    ];
    public function automoveis(){
        return $this->belongsToMany(Automovel::class,'automovel_id');
    }
}
