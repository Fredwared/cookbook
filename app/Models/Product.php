<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;




class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasUuids;

    protected $primaryKey = "uuid";
    protected $fillable = ["name", "description", "category_id", "price"];


    /**
     * @return BelongsTo
     */

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * @return HasMany
     */

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }


    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(AttributeValue::class, "product_attributes", 'attribute_id', 'product_uuid');
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }


    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return "uuid";
    }
}
