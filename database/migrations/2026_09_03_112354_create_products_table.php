<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_code')->unique();
            $table->string('title');
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete()->cascadeOnDelete();
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('price_discounted')->nullable();
            $table->string('poster')->nullable();
            $table->unsignedBigInteger('stock');
            $table->enum('status', ['active', 'inactive', 'stop_selling', 'unavailable'])->default('inactive');
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
