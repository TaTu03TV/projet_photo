<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $table = 'manga';
    protected $primaryKey = 'id_manga';

    protected $fillable = [
        'id_manga',
        'id_dessinateur',
        'id_scenariste',
        'prix',
        'titre',
        'couverture',
        'id_genre'
    ];

    public $timestamps = false;
}