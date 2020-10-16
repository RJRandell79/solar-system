<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtmospheresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atmospheres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('star_id')->default(0);
            $table->unsignedBigInteger('planet_id')->default(0);
            $table->unsignedBigInteger('moon_id')->default(0);
            $table->float('argon')->default(0);
            $table->float('carbon_dioxide')->default(0);
            $table->float('helium')->default(0);
            $table->float('hydrogen')->default(0);
            $table->float('methane')->default(0);
            $table->float('nitrogen')->default(0);
            $table->float('other')->default(0);
            $table->float('oxygen')->default(0);
            $table->float('sodium')->default(0);
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
        Schema::dropIfExists('atmospheres');
    }
}
