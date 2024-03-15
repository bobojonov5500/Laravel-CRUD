<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('new_posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('topic')->nullable();
            $table->string('sub_topic')->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('new_posts');
    }
};
