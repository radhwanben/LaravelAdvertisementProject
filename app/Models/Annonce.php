<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;

    protected  $table='annoces';

    protected $casts = [
        'terrainbati' => 'array'
    ];

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
        'localisation',
        'user_id'
    ];




    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
