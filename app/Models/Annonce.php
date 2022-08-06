<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'reference',
        'surface',
        'terrainbati',
        'file',
        'titre',
        'description',
        'prix',
        'photos',
        'localisation'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
