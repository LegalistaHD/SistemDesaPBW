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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_surat')->constrained('jenis_surats')->onDelete('cascade');
            $table->string('nomor_surat');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->tinyInteger('status')->default(0); 
            // 0 = pending, 1 = validasi operator, 2 = validasi sekdes, 3 = validasi kades,-1 ditolak dg ctt
            $table->boolean('tanda_tangan')->default(false);
            $table->text('catatan')->nullable(true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
