<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'discipline'
    ];

    // Relation avec les sujets (topics)

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
