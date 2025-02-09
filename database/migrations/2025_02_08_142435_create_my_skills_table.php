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
        Schema::create('my_skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('skill_type', [
                'front-end',
                'backend',
                'server-side',
                'database',
                'devops',
                'full-stack',
                'cms',
                'version-control',
                'testing',
                'security',
                'mobile-development',
                'ui-ux-design'
            ]);
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->integer('percentage')->nullable();
            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_skills');
    }
};
