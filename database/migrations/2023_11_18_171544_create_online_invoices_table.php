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
        Schema::create('online_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->default(0);
            $table->string('order_number')->default(0);
            $table->string('user_id')->default(0);
            $table->string('address_id')->default(0);
            $table->string('order_id')->default(0);
            $table->string('delivery_status')->default('verifying');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_invoices');
    }
};
