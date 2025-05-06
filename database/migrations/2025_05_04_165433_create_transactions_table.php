<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->string('transaction_ref')->unique();
            $table->decimal('amount', 12, 2);
            $table->enum('status', ['success', 'failed', 'pending'])->default('pending');
            $table->text('gateway_response')->nullable(); // Store Paystack response if needed
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
