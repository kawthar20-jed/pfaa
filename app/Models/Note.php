<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_utilisateur',
        'titre',
        'topic_id',
        'description',
        'photo',
        'publication_date',
        'mot_cle',
        'rating'
    ];
}
