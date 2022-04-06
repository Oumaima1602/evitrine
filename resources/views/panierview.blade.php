@extends('layouts.app')

@section('content')



<style>


</style>
<div class="container-fluid">
<div class="row">
 
 <table class="table  table-striped">

 <tr>
   
    <th>NOM ARTICLES</th>
    <th>IMAGE</th>
    <th>QUANTITE</th>
    <th>PRIX</th>
    <th>DELETE</th>
 </tr>

   <?php $total=0;?>
 @foreach($p as $Arts)

 <?php $total += $Arts['prix']; ?>
        
 <tr>

<td>{{$Arts->nom_art}}</td>
<td><img src={{asset('./images/'.$Arts["image_art"])}} alt="" style="height: 50px; width:50px"></td>
<td>{{$Arts->quantite}}</td>
<td>{{$Arts->prix}}</td>


<td> 
     
    <a href="/deletepanier?id={{$Arts['id']}}" class="btn btn-outline-success" >supprimer</a>
</td>
    
  @endforeach

<tr>
  <td>Total d'Achats :</td>
  <td></td>
  <td></td>
  <td> {{$total}}</td>
</tr>

      </table>
</div>
</div>
  @endsection