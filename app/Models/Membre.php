<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Membre extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomcomplet',
        'email',
        'profession',
        'age',
        'sexe',
        'user_id'
    ];


    public function user_account(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public  function nomcomplet(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value
        );
    }
}
