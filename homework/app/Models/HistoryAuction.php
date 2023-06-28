<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryAuction extends Model
{
    use HasFactory;


    protected $table = 'history_auctions';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function product() {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
