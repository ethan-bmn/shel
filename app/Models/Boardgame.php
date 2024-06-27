<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boardgame extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'number_of_player',
        'playing_time',

    ];
    //Relation avec la table recommendation
    public function recommendation(): HasMany
    {
        return $this->hasMany('App\Models\Recommendation');
    }

    public function photo(): HasMany
    {
        return $this->hasMany('App\Models\Photo');
    }

    public function shopping_cart(): BelongsTo
    {
        return $this->belongsTo('App\Models\Shopping_Cart');
    }

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(category::class, 'categorize');
    }

    public function loan(): BelongsToMany
    {
        return $this->belongsToMany(loan::class, 'borrow');
    }
}
