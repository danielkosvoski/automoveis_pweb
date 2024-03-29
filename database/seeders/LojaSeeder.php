<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loja;

class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loja::factory()->count(1)->sequence(
            ['nome' => 'Vendedor Particular', 'cnpj' => '123456789', 'email' => 'email@email.com', 'contato' => '499888888' ]
            
        )->create();
    }
}
