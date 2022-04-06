<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanierController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/adminview', function () {
//     return view('adminview');
// });




Auth::routes();

// Route::get('login', [Auth\LoginController::class,'showLoginForm'])->name('login');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('adminview', [HomeController::class,"adminView"])->name('admin.view');
});

route::get('/home',[HomeController::class,"home"])->name('home');
route::get('/gestionC',[CategorieController::class,"listeCat"])->name('listeC');
route::get('/formadd',[CategorieController::class,"index"])->name('addcat');
route::get('/ajouterCAT',[CategorieController::class,"ajouteCat"])->name('ajoutecat');
route::get('/updateCAT/{id}',[CategorieController::class,"updateCat"])->name('updatecat');
route::get('/editCAT/{id}',[CategorieController::class,"editCat"])->name('editcat');
route::get('/deleteCAT',[CategorieController::class,"deleteCat"])->name('deletecat');



Route::get('/indexArt', [ArticleController::class, 'index'])->name('addArt');
Route::get('/addArt',[ArticleController::class,'addArt'])->name('add');
Route::get('/displayArt',[ArticleController::class, 'listeArt'])->name('listeArt');
Route::get('/deleteArt',[ArticleController::class,'deleteArt'])->name('deleteArt');
Route::get('/editArt/{id}',[ArticleController::class, 'editArt'])->name('editArt');
Route::get('updateArt/{id}',[ArticleController::class, 'updateArt'])->name('updateArt');



Route::get('/femme/1',[ArticleController::class,'femme'])->name('femme');
Route::get('/homme/2',[ArticleController::class, 'homme'])->name('homme');



Route::get('/panier/{id}',[PanierController::class, 'addpanier'])->name('panier');
Route::get('/panier',[PanierController::class, 'listpanier'])->name('panieruser');

Route::get('/displaypanier',[PanierController::class, 'listpanier'])->name('listpanier');
route::get('/deletepanier',[PanierController::class,"deletepanier"])->name('deletepanier');


