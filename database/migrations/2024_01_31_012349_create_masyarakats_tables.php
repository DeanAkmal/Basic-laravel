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
        Schema::create('masyarakats_tables', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('nama',35);
            $table->string('username',25);
            $table->string('password',32);
            $table->string('telp',13);
            $table->timestamps();
        });
    }

};
