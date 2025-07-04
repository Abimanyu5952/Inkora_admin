<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->json('customizable')->nullable(); // For storing customization data
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
