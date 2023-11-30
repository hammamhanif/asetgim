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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->enum('area', ['Jawa Tengah', 'Sumatera Utara', 'Sulawesi Utara', 'NTB', 'NTT', 'Bali']);
            $table->enum('asset_type', ['2d', '3d']);
            $table->text('description');
            $table->enum('status', ['active', 'inactive', 'pending'])->default('inactive');
            $table->string('path');
            $table->string('path2');
            $table->unsignedInteger('count')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
