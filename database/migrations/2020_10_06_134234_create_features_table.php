<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->text('overview');
            $table->string('bullet1')->nullable();
            $table->string('bullet2')->nullable();
            $table->string('bullet3')->nullable();
            $table->string('bullet1_icon')->nullable();
            $table->string('bullet2_icon')->nullable();
            $table->string('bullet3_icon')->nullable();
            $table->string('image_url');
            $table->morphs('featureable');
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
        Schema::dropIfExists('features');
    }
}
