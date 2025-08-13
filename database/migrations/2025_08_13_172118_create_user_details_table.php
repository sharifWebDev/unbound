<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('user_id')->constrained('users')->cascadeOnDelete();

            $table->text('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nationality', 100)->nullable();

            $table->string('emergency_name', 150)->nullable();
            $table->string('emergency_relation', 100)->nullable();
            $table->string('emergency_phone', 20)->nullable();
            $table->string('emergency_email', 150)->nullable();

            $table->string('preferred_language', 50)->nullable();
            $table->string('dietary_restrictions', 50)->nullable();
            $table->text('special_requests')->nullable();

            $table->unsignedInteger('country_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->unsignedInteger('city_id')->nullable()->constrained('cities')->nullOnDelete();
            $table->unsignedInteger('area_id')->nullable()->constrained('areas')->nullOnDelete();

            $table->text('description')->nullable();
            $table->string('designation', 150)->nullable();

            $table->boolean('email_notifications')->default(true);
            $table->boolean('marketing_updates')->default(false);

            $table->timestamp('joined_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
