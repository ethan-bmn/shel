<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Notification extends Model
{
    use HasFactory;

    //Relation avec la table notify 0-n
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(user::class, 'notify');
    }
}
