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
        'picture',
        'category_id',

    ];
    //Relation avec la table recommendation 0-n
    public function recommendation(): HasMany
    {
        return $this->hasMany('App\Models\Recommendation');
    }

    //Relation avec la table category 1-1
    public function category(): BelongsTo
    {
        return $this->belongsTo('App\Models\Category');
    }

    //Relation avec la table borrow 0-n
    public function loan(): BelongsToMany
    {
        return $this->belongsToMany(loan::class, 'borrow');
    }
}
