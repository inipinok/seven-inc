<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // public function user(){
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }

    // public function detail(){
    //     return $this->hasMany(CartDetail::class, 'cart_id', 'id');
    // }

    // public function updatetotal($itemcart, $subtotal) {
    //     $this->attributes['subtotal'] = $itemcart->subtotal + $subtotal;
    //     $this->attributes['total']    = $itemcart->total + $subtotal;
    //     self::save();
    // }
}
