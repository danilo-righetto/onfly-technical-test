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
        Schema::create('onfly_travel_request', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('name_applicant');
            $table->string('origin');
            $table->string('destination');
            $table->date('departure_date');
            $table->date('return_date');
            $table->string('status');
            $table->unsignedBigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('onfly_users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('onfly_travel_request');
    }
};
