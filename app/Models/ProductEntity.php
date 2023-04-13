<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductEntity extends Model
{
    use HasFactory;

    protected $fillable = [
        "room_type",
        "is_smoking_allowed",
        "bed_type",
        "bed_count",
        "price",
        "price_for_residents",
        "room_size",
        "product_id"
    ];

    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
