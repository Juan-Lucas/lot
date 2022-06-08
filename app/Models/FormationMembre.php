<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationMembre extends Model
{
    use HasFactory;

    protected $fillable = ['membre_id', 'formation_id'];
}
