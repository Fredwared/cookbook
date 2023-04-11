<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'country_id',
        'city_id',
        'birthdate',
        'number',
        'primary_number',
        'optional_number',
        'surname',
        'password',
        'gender',
        'preferred_contact_method',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'verified_at' => 'datetime',
    ];




    /**
     *
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
