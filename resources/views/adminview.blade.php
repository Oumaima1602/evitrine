@extends('layouts.app')

@section('content')
{{-- @section('categorie') --}}
{{-- <link rel="stylesheet " type="text/css" href="{{url('css/style.css')}}"> --}}
{{-- 
<a class="dropdown-item" href="{{ route('listeC')}}" class="text-light" style = "text-decoration : none;">Gestion Article</a></button>
<a class="dropdown-item" href="{{ route('listeC')}}" class="text-light" style = "text-decoration : none;">Gestion Categorie</a></button>
@endsection --}}


@section('categoriebutton')
<body id="toto">
<table id="tt">
<tr>
<td colspan="2">
<div class="header"> GESTION BACKEND</div>
</td>
</tr>

<tr id="es">
<td class="div1">
<img src="{{asset('./picture/cc.png')}}"/>
<p    class="parag">Categories</p>
<a href="{{ route('listeC')}}" class="bb bt2" > CLICK</a></button>
<br></br>
</td>
<td class="div1">
<img src="{{asset('./picture/imm2.png')}}"/> 
<p  class="parag">Articles</p>
<a href="{{ route('listeArt')}}" class="bb bt2" > CLICK</a></button>

<br></br>
</td>

</body>
@endsection 
