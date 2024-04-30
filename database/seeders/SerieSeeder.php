<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //se não existir, cria a série de nome "Black Mirror"
        if (!Serie::where('nome', 'Black Mirror')->first()) {
            Serie::create(['nome' => 'Black Mirror']);
        }

        if (!Serie::where('nome', 'Flash')->first()) {
            Serie::create(['nome' => 'Flash']);
        };
        if (!Serie::where('nome', 'Travelers')->first()) {
            Serie::create(['nome' => 'Travelers']);
        };
    }
}
