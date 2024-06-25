<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reccomendation extends Model
{
    use HasFactory;

    public function boardgame(): BelongsTo
    {
        return $this->belongsTo('App\Models\Boardgame');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
