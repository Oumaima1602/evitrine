<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
class Categorie extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'name',
        
    ];
    function Article(){
        return $this->hasMany(Article::class);

}
}
