@extends('layouts.videogames') 
@section('title', 'Tutti i videogiochi')
@section('content')
<form action="{{route("videogames.update", $videogame)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <input type="text" class="form-control" name="name" value={{$videogame->name}} placeholder="Inserisci il titolo">
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" value={{$videogame->release_year}} name="release_year">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="language" value={{$videogame->language}} placeholder="Inserisci la lingua">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="description" value={{$videogame->description}} id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
<button type="submit" class="btn btn-primary">Salva</button>
<a class="btn btn-warning" href="{{route ("videogames.index")}}">Torna alla lista</a>

</form>
@endsection