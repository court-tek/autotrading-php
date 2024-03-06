<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory;

    /**
     * Get the Listing that has a particular user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
