@extends('layouts.videogames') 
@section('title', 'Tutti i videogiochi')
@section('content')
<form action="{{route("videogames.store")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="Inserisci il titolo">
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" name="release_year">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="language" placeholder="Inserisci la lingua">
    </div>
    <div class="mb-3">
        <label for="image">Immagine</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
<button type="submit" class="btn btn-primary">Salva</button>

</form>
@endsection