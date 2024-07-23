<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('ticket_id')->references('id')->on('tickets')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('buyer_name');
            $table->date('ticket_date');
            $table->string('email');
            $table->string('phone');
            $table->integer('quantity');
            $table->string('snap_token')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('status_code')->default('Unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
