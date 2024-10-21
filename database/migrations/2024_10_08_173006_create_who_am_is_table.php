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
        Schema::create('who_am_is', function (Blueprint $table) {
            $table->id();
            $table->string('who');
            $table->string('designation');
            $table->text('my_des');
            $table->string('cv_btn_link');
            $table->string('cv_btn_txt');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('who_am_is');
    }
};
