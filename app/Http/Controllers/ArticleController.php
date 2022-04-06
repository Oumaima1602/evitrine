<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    //


    public function femme(){
  
        // $articles=new Article();

        //  $listeArt=$articles::all()->where('cat_id',1);
         $listeArt =  DB::table('articles')->where('cat_id',1)->paginate(3);

         return view ("Artfemme",['lisArt'=>$listeArt]);
    }
    public function homme(){
  
        // $articles=new Article();

        //  $listeArt=$articles::all()->where('cat_id',2);
         $listeArt =  DB::table('articles')->where('cat_id',2)->paginate(3);
         return view ("Artfemme",['lisArt'=>$listeArt]);
    }

    
    // public function homme(){
    //     $articles=new Article();

    //     $listeArt=$articles::all()->where('cat_id',2);
    //     return view ("Arthomme",['lisArt'=>$listeArt]);
    // }


    public function index(){

        return view('Articles.addArt');

    }

    public function addArt(Request $rqt){

        $nom = $rqt->nom_art;
      //  $nom = $rqt['nom_art'];
        $desc = $rqt->description;
        $qty = $rqt->quantité;
        $prix = $rqt->prix_unitaire;
        $file =  $rqt->image_art;
      //  $contents = $file->openFile()->fread($file->getSize());
        $categorie_id = $rqt->cat_id;

        $product = new Article();
        $product->nom_art = $nom;
        $product->image_art = $file;
        $product->description = $desc;
        $product->quantité = $qty;
        $product->prix_unitaire = $prix;
        $product->cat_id = $categorie_id;

        $product->save();

        //session()->flash('message','Product added successfully');

        return Redirect::route('listeArt');


    }

    public function listeArt(){

        $products = Article::all();

        return view('Articles.listeArt',['p'=>$products]);

    }

    public function deleteArt(Request $rqt){

        $id = $rqt['id'];
        $prd = Article::find($id);
        $prd->delete();

        return Redirect::route('listeArt');

    }

    public function editArt(Request $rqt){

        $id = $rqt['id'];
        $p = Article::find($id);

        return view('Articles.editArt', compact('p'));

    }

    public function updateArt(Request $rt){

        $id = $rt['id'];
        $product = Article::find($id);

        $nom = $rt->nom_art;
        $desc = $rt->description;
        $qty = $rt->quantité;
        $prix = $rt->prix_unitaire;
        $file =  $rt->image_art;
        $categorie_id = $rt->cat_id;

        $product->nom_art = $nom;
        $product->image_art = $file;
        $product->description = $desc;
        $product->quantité = $qty;
        $product->prix_unitaire = $prix;
        $product->cat_id = $categorie_id;

        $product->update();

        return Redirect::route('listeArt');

    }
    
}