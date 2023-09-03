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
        Schema::create('m_tamus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->string('no_tlp_tamu')->nullable();
            $table->string('type_tamu');
            $table->string('visit_website_status')->default('false');
            $table->string('link_tamu')->nullable();
            $table->string('hadir')->default('false');
            $table->integer('jumlah_tamu')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamus');
    }
};
