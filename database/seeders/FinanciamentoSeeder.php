<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Financiamento;

class FinanciamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Financiamento::factory()->count(5)->sequence(
            ['nome' => 'Santander', 'taxa' => '12'],
            ['nome' => 'Nubank', 'taxa' => '30'],
            ['nome' => 'Itau', 'taxa' => '9'],
            ['nome' => 'Bradesco', 'taxa' => '13'],
            ['nome' => 'PagBank', 'taxa' => '10'],
        )->create();
    }
}
