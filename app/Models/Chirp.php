<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    // Applying the mass assignment protection by default instead of assigning it one-by-one.
    protected $fillable = [
        'message',
    ];
}
