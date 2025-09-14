@extends('layouts.videogames') 
@section('title', 'Tutti i videogiochi')

@section('content')
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Release year</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($videogames as $videogame)
        <tr>
            <td>{{$videogame->name}}</td>
            <td>{{$videogame->release_year}}</td>
            <td>{{$videogame->language}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection