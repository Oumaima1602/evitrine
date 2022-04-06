@extends('layouts.app')

@section('listArt')

<style>
.row{
    display:flex;
    align-items:center;
    justify-content:space-around;
    flex-wrap:wrap;
    padding

    
}

.col-3{
    flex-basis:30%;
    min-width:250px;
    margin:auto;
}
.articles {
 
    margin : 70px 0;
    margin-right: 0px;
  margin-left: 0px;
  padding:-20px!important;
}

main{
    display:flex; 
  
 
}
.pic{
    
  width:200 ;
  height:200;
  
}
.dis{
      font-size:0.7rem;
}
.qt{
width:20%;

  margin-bottom:10px
}
</style>


<main>
 @foreach($lisArt as $Art)

<section class="articles">
<div class="container">
<div class="row">
<div class="col-3">
 <img src="{{asset("./images/".$Art["image_art"])}}" class="pic"  alt="...">
 <p class="fs-1">{{$Art["nom_art"]}} </p>
 <p class="dis">{{$Art["description"]}} </p>
 <p class="">{{$Art["prix_unitaire"]}} DH</p>
    







 <form method="get"  action="{{route('panier',$Art->id)}}">
 
 
 {{-- ,['user_id'=>Auth::user()->id ] --}}

 <label  style =" ">Quantité :   </label>
 <input class="qt" type="number" name="quantite"  placeholder="QT"/> 

 <label  style =" ">Ajouter au panier  :   </label>
<button type="submit" class="btn btn-dark my-2" name="submit"><i class="bi bi-cart-plus-fill"></i></button>
</form>
</div>
</div>
</div>

</section>

@endforeach
@endsection
</main>
