<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Scopes\UserScope;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are in blacklisted
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'is_admin',
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
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected static function booted(): void
    {
        static::addGlobalScope(new UserScope);
    }
    /**
     * Local scope to get all users who are admins
     */
    public function scopeIsAdmin(Builder $query): void
    {
        $query->where('is_admin', '=', true);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)->withTimestamps();
    }
    /**
     * Get full name from first name and last name
     */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->attributes['first_name'] . ' ' . $this->attributes['last_name'],
        );
    }
    /**
     * Change username into a slug string
     */
    protected function username(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::slug($value),
        );
    }
}
