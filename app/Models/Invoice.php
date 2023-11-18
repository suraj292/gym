<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable=['invoice_number'];

    public function customer_address()
    {
        return $this->hasOne(InvoiceAdd::class);
    }

    public function customer_product()
    {
        return $this->hasOne(InvoiceProduct::class);
    }

    public function customer_tax()
    {
        return $this->hasOne(InvoiceTax::class);
    }
}
