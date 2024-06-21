<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\sewa;
use App\Models\meja;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meja_sewas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(sewa::class);
            $table->foreignIdFor(meja::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meja_sewas');
    }
};
