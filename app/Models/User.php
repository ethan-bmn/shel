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
        'surname',
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


    public function isAdmin() {
        return $this->role->role_name === 'admin';
    }

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

    //Relation avec la table notify 0-n
    public function notification(): BelongsToMany
    {
        return $this->belongsToMany(notification::class, 'notify');
    }

    //Relation avec la table Loan 0-n
    public function loan() :HasMany
    {
        return $this->hasMany('App/Models/LoanController');
    }

    //Relation avec la table recommendation 0-n
    public function reccomendation() :HasMany
    {
        return $this->hasMany('App/Models/Recommendation');
    }

    //Relation avec la table shopping-cart 0-1
    public function shopping_cart() :BelongsTo
    {
        return $this->belongsTo('App/Models/Shopping_cart');
    }

    //Relation avec la table role 1-1
    public function role() :BelongsTo
    {
        return $this->belongsTo('App\Models\Role');
    }
}
