@extends('backend')
@section ('titre')

<h1>FORMULAIRE PRODUCT </h1>
@endsection 
@section('content')


<div class="container" style="padding:30px;">

<form action="{{route('add')}}" method="get">

    <label class="form-label">Name</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom_art"   placeholder="Product Name">
    <br>

    <label class="form-label">Image</label>
    <br>
    <input type="file" name="image_art">
<br>
<br>
    <label class="form-label">Description</label>
    <input  style="margin:10px;" type="text" class="form-control" name="description"   placeholder="Product Description">

    <label class="form-label">Quantité</label>
    <input  style="margin:10px;" type="number" class="form-control" name="quantité"   placeholder="Product Quantity">

    <label class="form-label">P.U</label>
    <input  style="margin:10px;" type="text" class="form-control" name="prix_unitaire"   placeholder="Product Price">
    <br>
    <label class="form-label">Catégorie</label>
    <select name="cat_id" id="cat">
    <option value="2">Homme</option>
    <option value="1">Femme</option>
    </select>
    <br>
    <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection