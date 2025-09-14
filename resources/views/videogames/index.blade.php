@extends('layouts.videogames') 
@section('title', 'Tutti i videogiochi')
@section('content')
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Titolo</th>
      <th scope="col">Pubblicazione</th>
      <th scope="col">Lingua</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($videogames as $videogame)
        <tr>
            <td>{{$videogame->name}}</td>
            <td>{{$videogame->release_year}}</td>
            <td>{{$videogame->language}}</td>
            <td><a href="{{route("videogames.show", $videogame->id)}}">Vai al dettaglio</a></td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection