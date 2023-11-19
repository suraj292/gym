<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'order_number',
        'user_id',
        'address_id',
        'order_id',
        'delivery_status'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
