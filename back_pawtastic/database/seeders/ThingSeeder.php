<?php

namespace Database\Seeders;

use App\Models\Thing;
use Illuminate\Database\Seeder;

class ThingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $things = ["jouer", "manger", "dormir"];
        foreach ($things as $thing) {
            $s = new Thing();
            $s->name = $thing;
            $s->save();
        }
    }
}
