<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecieThing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specie_thing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("specie_id");
            $table->unsignedBigInteger("thing_id");
            $table->foreign("specie_id")->references("id")->on("species");
            $table->foreign("thing_id")->references("id")->on("things");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specie_thing');
    }
}
