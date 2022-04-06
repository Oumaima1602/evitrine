<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'nom_art',
        'image_art',
        'description',
        'quantité',
        'prix_unitaire',
        'cat_id',
        
    ]; 

    function Categorie(){


        return $this->belongsTo(Categorie::class);
    }
    public function users()  
    {  
        // Un article appartient à une ou plusieurs users . 
        return $this->belongsToMany(user::class);  
    } 
}
