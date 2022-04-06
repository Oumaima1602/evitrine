<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller
{
   
    public function listeCat(Request $request){
  
        $categorie=new Categorie();
         $listeC=$categorie::all();
         return view ("Categorie.listeC",['lisC'=>$listeC]);
    }

    public function index(){
        return view('Categorie.Ajoutercat');
    }
    public function ajouteCat(Request $request){
        
        $nom=$request['name'];

        $categorie =new Categorie();
        $categorie->name=$nom;
        $categorie->save();
        return Redirect::route('listeC');    }



    public function editCat( $id){
        
        $categorie=new Categorie();

        $cat= $categorie->find($id);
        
        return view('Categorie.editC',compact('cat'));

    }



    public function updateCat(Request $request,$id){
        $request->validate([
            'name'=>'Required',
        ]);
        $categorie=Categorie::find($id);
        $categorie->name=$request->get('name');
        $categorie->save();
        return redirect::route('listeC');
    }


    public function deleteCat(Request $request){
          $id=$request['id'];
        $categorie=new Categorie();

        $idC= $categorie->find($id);
        $idC->delete();
        return redirect::route('listeC');

    }




}
