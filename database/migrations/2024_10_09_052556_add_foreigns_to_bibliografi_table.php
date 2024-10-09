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
        Schema::table('bibliografi', function (Blueprint $table) {
            $table
                ->foreign('bibliografi_kategori_id')
                ->references('id')
                ->on('bibliografi_kategori')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bibliografi', function (Blueprint $table) {
            $table->dropForeign(['bibliografi_kategori_id']);
        });
    }
};
