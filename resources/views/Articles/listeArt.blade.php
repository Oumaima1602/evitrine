@extends('layouts.app')

@section('content')

<div class="container">

<button class="btn btn-dark my-5" ><a href="{{ route('addArt')}}" class="text-light" style = "text-decoration : none;">Add New Product</a></button>
<button class="btn btn-dark my-5" ><a href="{{ route('home')}}" class="text-light" style = "text-decoration : none;">HOME</a></button>

 <table class="table  table-striped">

 <tr>
     <th>ID</th>  
     <th>NOM</th>
     <th>IMAGE</th>
     <th>DESCRIPTION</th>
     <th>QUANTITE</th>
     <th>P.U</th>
     <th>CATEGORIE</th>
     <th>DELETE</th>
     <th>UPDATE</th>
   </tr>

      
     @foreach($p as $product)
        
         <tr>
<td>{{$product->id}}</td>
<td>{{$product->nom_art}}</td>
<td><img src={{asset('./images/'.$product["image_art"])}} alt="" style="height: 25%; width:25%"></td>
<td>{{$product->description}}</td>
<td>{{$product->quantité}}</td>
<td>{{$product->prix_unitaire}}</td>
<td>{{$product->cat_id}}</td>

<td> 
     
    <a href="/deleteArt?id={{$product['id']}}" class="btn btn-outline-success" >supprimer</a>
      </td>
      <td>
  <a href="{{route('editArt',$product->id)}}" class="btn btn-outline-danger"  >modifier</a> 

     </td>
      </tr>
@endforeach 



</table> 
@endsection 