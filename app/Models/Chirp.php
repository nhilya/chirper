<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // added the relationship between Chirp model and User model, that defines the many-to-one relationship.

class Chirp extends Model
{
    use HasFactory;

    // Applying the mass assignment protection by default instead of assigning it one-by-one.
    protected $fillable = [
        'message',
    ];

    // defining the relationship between Chirp model and User model
    public function user(): BelongsTo
    {
        // returning the hasMany relationship with the Chirp model from the User model
        return $this->belongsTo(User::class);
    }
}
