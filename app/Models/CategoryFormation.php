<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formation;

class CategoryFormation extends Model
{
    use HasFactory;


    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
}
