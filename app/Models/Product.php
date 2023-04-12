<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
    use HasFactory, InteractsWithMedia;


    protected $fillable = ["name", "description", "category_id", "price", "city_id"];
    protected $hidden = "id";
    protected $primaryKey = "id";

    /**
     * @return BelongsTo
     */

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(ProductContact::class);
    }

    public function entities(): HasMany
    {
        return $this->hasMany(ProductEntity::class,"product_id");
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
        return $this->belongsToMany(AttributeValue::class, "product_attributes", "product_id", "attribute_id");
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

    public function scopeFilter(Builder $query)
    {
        $search = request("search");


        $query->when($search, function (Builder $query) use ($search) {

            $query
                ->where("name", "like", "%" . $search . "%")
                ->orWhereHas("city", function (Builder $query) use ($search) {
                    $query->where("name", "like", "%" . $search . "%");
                })
                ->orWhereHas("category", function (Builder $query) use ($search) {
                    $query->where("name", "like", "%" . $search . "%");

                });
        });
    }

}
