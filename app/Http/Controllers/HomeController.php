<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminView()
    {
        return view('adminview');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
     
        $request->user()->authorizeRoles(['internaute ', 'admin']);
           return view('home');
}
/* function qui didié pour les admin
public function someAdminStuff(Request $request)
{
$request->user()->authorizeRoles('admin');
// rmaplacer par une vue selon votre projet
return view(‘some.view’);
}
*/

public function home (){
    
return view('home');
}

}
    
