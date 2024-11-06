<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients_appoints', function (Blueprint $table) {
         
           $table->id();
           $table->string('name');
           $table->string('email')->unique();
           $table->string('d_name')->nullable();
           $table->string('Date')->nullable();
           $table->string('Time')->nullable();
           $table->string('Messeage')->nullable();
           $table->string('req_status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_appoints');
    }
};
