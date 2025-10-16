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
        Schema::table('pelanggan', function (Blueprint $table) {
            // Menambahkan kolom 'gender' dengan opsi enum
            $table->enum('gender', ['Male', 'Female', 'Non - Binary'])->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Menghapus kolom 'gender' jika rollback (kembali)
            $table->dropColumn('gender');
        });
    }
};
