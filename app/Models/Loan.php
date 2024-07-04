<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Loan extends Model
{
    use HasFactory;

    //Relation avec la table borrow 1-n
    public function boardgame(): BelongsToMany
    {
        return $this->belongsToMany(boardgame::class, 'borrow');
    }

    //Relation avec la table users 1-1
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
