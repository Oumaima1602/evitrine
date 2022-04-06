@extends('layouts.app')

@section('content')


<style>

.banner{
    position: relative;
    min-height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
   background-image:url('./css/best.jpg');
 
    background-size:cover ;
}
.banner .container-fluid .btn1:hover{
    color: #3d3e41;
    letter-spacing: 5px;
}

.banner .container-fluid .btn2:hover{
    color: powderblue;
;
    letter-spacing: 5px;
    
   
}
.banner .container-fluid .btn3:hover{
    color: powderblue;
;
    letter-spacing: 5px;
    
   
}
.container-fluid{
    background: cover;
    text-align: center;
    max-width: 100%;
}
.banner .container-fluid .btn1{
    
    padding: 10px 20px;
    background: black;
    display: inline-block;
    letter-spacing: 2px;
    margin-right: 20px;

     background-color: black;
  transition:  letter-spacing  .5s;
  text-decoration:none;

}
.banner .container-fluid .btn3{
   padding: 10px 20px;
    background: green;
    display: inline-block;
    letter-spacing: 2px;
    margin-right: 20px;
 text-decoration:none;

  
  background-color: green;
  transition:  letter-spacing  .5s;
  
}
.banner .container-fluid .btn2{
   
    padding: 10px 20px;
    background: black;
    display: inline-block;
    letter-spacing: 2px;
    margin-right: 20px;
 text-decoration:none;

  
  background-color: black;
  transition:  letter-spacing  .5s;
  

}
</style>

@if(Auth::user()->is_admin==1)



 
<section class="banner" >

        <div class="container-fluid">
<a href="{{ route('homme') }}" class="btn1 text-light">Categorie Homme </a>
 <a href="{{ route('femme') }}" class="btn2 text-light">Categorie  Femme </a>
 <a href="{{ route('admin.view') }}" class="btn3 text-light" > Admin view </a>
</div>
</section>
@endif





@if(Auth::user()->is_admin==0)

@section('categorie')
 <section class="banner" >

        <div class="container-fluid">
<a href="{{ route('homme') }}" class="btn1 text-light">Categorie Homme </a>
 <a href="{{ route('femme') }}" class="btn2 text-light">Categorie  Femme </a>
</div>
</section>
@endsection

@endif


   
@endsection
