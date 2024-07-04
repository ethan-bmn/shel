<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recommendation extends Model
{
    use HasFactory;
    protected $fillable = [
        'commentary',
        'user_id',
        'boardgame_id',

    ];

    //Relation avec la table boardgame 1-1
    public function boardgame(): BelongsTo
    {
        return $this->belongsTo('App\Models\Boardgame');
    }

    //Relation avec la table users 1-1
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
