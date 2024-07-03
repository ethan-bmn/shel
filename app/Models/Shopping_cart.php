<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shopping_cart extends Model
{
    use HasFactory;

    //Relation avec la table users 1-1
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
