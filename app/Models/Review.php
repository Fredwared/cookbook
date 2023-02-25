<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ["product_id", "content"];


    /**
     * @return BelongsTo
     */
    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class,"product_id");
    }
}
