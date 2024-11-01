<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Storage;

class PokemonSeeder extends Seeder
{
    public function run()
    {
        // Percorso del file CSV
        $csvPath = storage_path('app/public/pokemons.csv');

        // Apri il file e leggi ogni riga
        if (($handle = fopen($csvPath, 'r')) !== false) {
            // Leggi l'intestazione (prima riga)
            $header = fgetcsv($handle, 1000, ',');

            // Mappa i nomi delle colonne del CSV ai campi del database
            $fieldMap = [
                'Name' => 'name',
                'Form' => 'form',
                'Type1' => 'type1',
                'Type2' => 'type2',
                'Total' => 'total',
                'HP' => 'hp',
                'Attack' => 'attack',
                'Defense' => 'defense',
                'Sp_Atk' => 'sp_atk',
                'Sp_def' => 'sp_def',
                'Speed' => 'speed',
                'Generation' => 'generation',
            ];

            // Scorri ogni riga successiva
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                // Associa i valori della riga alle colonne della tabella usando la mappa
                $pokemonData = [];
                foreach ($fieldMap as $csvField => $dbField) {
                    $pokemonData[$dbField] = $data[array_search($csvField, $header)];
                }

                // Crea un nuovo record nel database con i campi mappati
                Pokemon::create($pokemonData);
            }
            fclose($handle);
        }
    }
}
