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
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->id();
            $table->string("nama_mahasiswa");
            $table->string("penghasilan");
            $table->float("nilai_penghasilan");
            $table->string("usia");
            $table->float("nilai_usia");
            $table->string("tanggungan");
            $table->float("nilai_tanggungan");
            $table->string("semester");
            $table->float("nilai_semester");
            $table->string("ipk");
            $table->float("nilai_ipk");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswa');
    }
};
