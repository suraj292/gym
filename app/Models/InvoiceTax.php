<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceTax extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'cgst_p',
        'cgst_a',
        'sgst_p',
        'sgst_a',
        'total_amount',
        'pre_tax',
        'taxable_amount',
        'round_off_amount',
        'grand_total',
        'amount_in_words',
    ];
}
