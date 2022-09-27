<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $table = 'cart_details';
    protected $guarded = ['id'];

    public function cart() {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }

    public function kost() {
        return $this->belongsTo(Kost::class, 'kost_id', 'id');
    }

    public function updatedetail($itemdetail, $qty, $price) {
        $this->attributes['qty'] = $itemdetail->qty + $qty;
        $this->attributes['subtotal'] = $itemdetail->subtotal + ($qty * $price);
        self::save();
    }
}
