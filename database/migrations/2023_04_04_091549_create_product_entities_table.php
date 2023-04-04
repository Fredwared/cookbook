<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_entities', function (Blueprint $table) {
            $table->id();
            $table->foreignId("product_id")->constrained();
            $table->string("room_type");
            $table->boolean("is_smoking_allowed");
            $table->string("bed_type");
            $table->integer("bed_count");
            $table->float("room_size");
            $table->float("price");
            $table->float("price_for_residents");
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
        Schema::dropIfExists('product_entities');
    }
};
