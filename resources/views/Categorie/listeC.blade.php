@extends('layouts.app')

@section('content')

<div class="container-fluid">

<button class="btn btn-dark my-5" ><a href="{{ route('addcat')}}" class="text-light" style = "text-decoration : none;">Add new categorie</a></button>
<button class="btn btn-dark my-5" ><a href="{{ route('home')}}" class="text-light" style = "text-decoration : none;">HOME</a></button>
<button class="btn btn-dark my-5" ><a href="{{ route('admin.view')}}" class="text-light" style = "text-decoration : none;">Home admin</a></button>
 <table class="table  table-white " Style="width: 100%;">

 <tr>
     <th>ID</th>  
     <th>NOM</th>
     <th>DELETE</th>
     <th>UPDATE</th>
   </tr>

      
     @foreach($lisC as $cat)
        
         <tr>
<td>{{$cat->id}}</td>
<td>{{$cat->name}}</td>

<td> 
     
    <a href="/deleteCAT?id={{$cat["id"]}}" class="btn btn-outline-success" >supprimer</a>
      </td>
      <td>
  <a href="{{route('editcat',$cat->id)}}" class="btn btn-outline-danger"  >modifier</a> 

     </td>
      </tr>
@endforeach 


</table> 
@endsection