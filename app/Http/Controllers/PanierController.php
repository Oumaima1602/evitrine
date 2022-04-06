<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class PanierController extends Controller
{
   public function addpanier(Request $rqt,$id){
    
    
    $quantite=$rqt['quantite'];
  $panier = new Panier();

    // $id = $rqt['id'];
    $prd = Article::find($id);

    $nom = $prd->nom_art;
    $file =  $prd->image_art;
    $prix=$prd->prix_unitaire;
    // $quantite=$rqt->quantite;

    $panier->nom_art = $nom;
    $panier->image_art = $file;
    $panier->quantite = $rqt->get('quantite');
    $panier->prix =  $prix* $panier->quantite ;
    $panier->user_id=Auth::user()->id ;

      $panier->save();
     
      return Redirect::route('listpanier');
   }
   public function listpanier(){
    $Artss = Panier::all()->where('user_id',Auth::user()->id);

    return view('panierview',['p'=>$Artss]);
   }

   public function deletepanier(Request $rqt){

    $id = $rqt['id'];
    $prd = Panier::find($id);
    $prd->delete();

    return Redirect::route('listpanier');

}
}
