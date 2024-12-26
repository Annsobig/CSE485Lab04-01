<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'quantity'];

    //Định nghĩa mối quan hệ nhiều 1 của order_detail với order
    public function orders(){
        return $this->belongsTo(Order::class);
    }

    //
    public function products(){
        return $this->belongsTo(Product::class);
    }
}