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
        Schema::table('votes', function (Blueprint $table) {
            $table->string('candidate2');
            $table->string('candidate3');
            $table->string('candidate4');
            $table->string('candidate5');
            $table->string('candidate6');
            $table->string('candidate7');
            $table->string('candidate8');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->string('Category');
        });
    }
};
