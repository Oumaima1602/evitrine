@extends('backend')
@section ('titre')


@endsection 
@section('content')


<div class="container" style="padding:30px;">

<form action="{{route('ajoutecat')}}" method="get">

    <label class="form-label">Name</label>
    <input  style="margin:10px;" type="text" class="form-control" name="name"   placeholder="Your Name">
 
    <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection 