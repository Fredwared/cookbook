<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ["name"];



    public function value(): HasOne
    {
        return $this->hasOne(AttributeValue::class);
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class, "product_attributes","attribute_id","product_id");
    }



}
