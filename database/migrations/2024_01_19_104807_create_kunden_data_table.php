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
        Schema::create('kunden_data', function (Blueprint $table) {
            $table->id();
            $table->string('strasse',255);
            $table->string('hausnummer',255);
            $table->string('postleitzahl',255);
            $table->string('ort',255);
            $table->foreignId('kunden_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunden_data');
    }
};
