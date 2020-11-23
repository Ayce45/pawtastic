<?php

namespace Database\Seeders;

use App\Models\Specie;
use Illuminate\Database\Seeder;

class SpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $species = [["chat", "img/cat.png"], ["chien", "img/dog.png"], ["perroquet", "img/parrot.png"]];
        foreach ($species as $specie) {
            $s = new Specie();
            $s->name = $specie[0];
            $s->image = $specie[1];
            $s->save();
        }
    }
}
