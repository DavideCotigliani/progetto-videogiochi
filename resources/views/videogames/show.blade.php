@extends('layouts.videogames') 
@section('title', 'Singolo videogioco')

@section('content')
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">{{$videogame->name}}</h4>
    <h5 class="card-title">{{$videogame->release_year}}</h5>
    <p class="card-text">{{$videogame->description}}</p>
    <a href="{{route("videogames.index")}}" class="btn btn-primary">Torna alla lista dei videogiochi</a>
  </div>
</div>
@endsection