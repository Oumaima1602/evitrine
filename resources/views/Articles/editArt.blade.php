@extends('backend')
@section ('titre')

<h1>FORMULAIRE PRODUCT </h1>
@endsection 
@section('content')


<div class="container" style="padding:30px;">

<form action="{{route('updateArt', $p->id)}}" method="get">

    <label class="form-label">Name</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom_art"   placeholder="Product Name" value="{{$p->nom_art}}">
    <br>

    <label class="form-label">Image</label>
    <br>
    <input type="file" name="image_art">
    @if($p["image_art"])
        <img src={{asset('./articles/'.$p["image_art"])}} style="height: 25%; width:25%">
    @else
    <img src={{asset('./articles/'.$p["image_art"])}} style="height: 25%; width:25%">
    @endif

<br>
<br>
    <label class="form-label">Description</label>
    <input  style="margin:10px;" type="text" class="form-control" name="description"   placeholder="Product Description" value="{{$p->description}}">

    <label class="form-label">Quantité</label>
    <input  style="margin:10px;" type="number" class="form-control" name="quantité"   placeholder="Product Quantity" value="{{$p->quantité}}">

    <label class="form-label">P.U</label>
    <input  style="margin:10px;" type="text" class="form-control" name="prix_unitaire"   placeholder="Product Price" value="{{$p->prix_unitaire}}">
    <br>
    <label class="form-label">Catégorie</label>
    <select name="cat_id" id="cat" value="{{$p->cat_id}}">
    <option value="1">Homme</option>
    <option value="2">Femme</option>
    </select>
    <br>
    <button type="submit" class="btn btn-dark my-5" name="update">Update</button>
</form>
</div>
@endsection 