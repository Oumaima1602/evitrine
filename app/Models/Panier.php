<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
       'quantite',
        'prix',
        'image_art',
        'nom_art',
       'user_id'
    ];
    public function user ()
    {
        return $this->hasOne(User::class);
    }

}
