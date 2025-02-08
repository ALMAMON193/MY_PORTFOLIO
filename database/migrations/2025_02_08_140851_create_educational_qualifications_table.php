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
        Schema::create('educational_qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('field_of_study')->nullable(); 
            $table->string('institution_name'); 
            $table->string('location')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable(); 
            $table->decimal('cgpa', 4, 2)->nullable(); 
            $table->string('certificate')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_qualifications');
    }
};
