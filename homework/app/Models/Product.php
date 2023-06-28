<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function productCategory() {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function productDetails(){
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function historyAuctions(){
        return $this->hasMany(HistoryAuction::class, 'product_id', 'id');
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
}

