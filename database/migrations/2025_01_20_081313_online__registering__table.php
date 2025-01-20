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
        Schema::create('online_registerings', function (Blueprint $table){
            $table->id();
            $table->string('programme');
            $table->string('title');
            $table->string('name');
            $table->string('full_name');
            $table->date('dob');
            $table->string('country');
            $table->string('nic');
            $table->string('mobile');
            $table->string('email');
            $table->string('telephone');
            $table->string('address');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_registerings');
    }
};
