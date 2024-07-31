<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovel_Financiamento extends Model
{
    use HasFactory;

    protected $table = "automovel_financiamento";
    //app/Models/
    protected $fillable = [
        "financiamento_id",
        "automovel_id",
    ];
    
}
