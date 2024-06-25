<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Photo_User extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
