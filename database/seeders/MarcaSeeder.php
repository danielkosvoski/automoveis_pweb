<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marca::factory()->count(4)->sequence(
            ['nome' => 'BMW'],
            ['nome' => 'Toyota'],
            ['nome' => 'Honda'],
            ['nome' => 'ElonMusk']
        )->create();
    }
}
