@extends('backend')

@section('content')

<div class="container" style="padding:30px;">


 <form method="get" action="{{route('updatecat',$cat->id)}}">
         
            <div class="form-group">
 
                <label for="name">Name:*</label>
                <input type="text" class="form-control" name="name" value="{{$cat->name}}" />
            </div>
 
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection