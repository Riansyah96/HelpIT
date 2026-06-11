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
        // Memastikan kolom 'admin_notes' belum ada sebelum menambahkannya
        if (!Schema::hasColumn('orders', 'admin_notes')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->text('admin_notes')->nullable()->after('problem_description');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'admin_notes')) {
                $table->dropColumn('admin_notes');
            }
        });
    }
};