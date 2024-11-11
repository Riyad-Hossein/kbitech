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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_type_id')->nullable();
            $table->unsignedBigInteger('project_category_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('client')->nullable();
            $table->date('project_date');
            $table->text('team_members')->nullable();
            $table->text('location')->nullable();
            $table->longText('details')->nullable();
            $table->string('image')->nullable();
            \App\Helpers\MigrationHelper::getCommonColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
