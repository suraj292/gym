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
        Schema::create('invoice_taxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->nullable()->constrained('invoices')->onDelete('cascade');
            $table->string('cgst_p')->nullable();
            $table->string('cgst_a')->nullable();
            $table->string('sgst_p')->nullable();
            $table->string('sgst_a')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('pre_tax')->nullable();
            $table->string('taxable_amount')->nullable();
            $table->string('round_off_amount')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('amount_in_words')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_taxes');
    }
};
