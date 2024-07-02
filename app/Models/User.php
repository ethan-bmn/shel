<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function notification(): BelongsToMany
    {
        return $this->belongsToMany(notification::class, 'notify');
    }

    public function loan() :HasMany
    {
        return $this->hasMany('App/Models/LoanController');
    }

    public function reccomendation() :HasMany
    {
        return $this->hasMany('App/Models/Recommendation');
    }

    public function shopping_cart() :BelongsTo
    {
        return $this->belongsTo('App/Models/Shopping_cart');
    }

    public function photo_user() :BelongsTo
    {
        return $this->belongsTo('App/Models/Photo_User');
    }

    public function role() :BelongsTo
    {
        return $this->belongsTo('App/Models/Role');
    }
}
