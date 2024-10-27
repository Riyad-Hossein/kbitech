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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_type_id');
            $table->unsignedBigInteger('service_category_id');
            $table->string('name');
            $table->string('slug');
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('image')->nullable();
            \App\Helpers\MigrationHelper::getCommonColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
