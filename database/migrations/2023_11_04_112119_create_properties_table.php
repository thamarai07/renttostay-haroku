<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }

    // database/migrations/xxxx_xx_xx_create_properties_table.php
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail');
            $table->string('banner');
            $table->string('business_type');
            $table->string('suitable_for');
          
            $table->timestamps();
        });
    }

};
