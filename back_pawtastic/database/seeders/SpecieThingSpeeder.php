<?php

namespace Database\Seeders;

use App\Models\Specie;
use App\Models\Thing;
use Illuminate\Database\Seeder;

class SpecieThingSpeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specieThings = [["chien", "jouer"], ["chien", "manger"], ["chat", "jouer"], ["chat", "jouer"]];

        foreach ($specieThings as $specieThing) {
            $specie = Specie::where('name', $specieThing[0])->first();
            $thing = Thing::where('name', $specieThing[1])->first();

            $specie->things()->attach($thing);
            $specie->save();
        }
    }
}
