@extends('layouts.videogames') 
@section('title', 'Tutti i videogiochi')
@section('content')
<form action="{{route("videogames.update", $videogame)}}" method="POST" enctype="multipart/form-data">
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
    {{-- img --}}
     <div class="mb-3">
        <label for="image">Immagine</label>
        <input type="file" class="form-control" name="image">
                @if ($videogame->image)
                <div id="videogame-image">
                <img class="card-img-fluid w-25" src="{{asset("storage/" . $videogame->image)}}" alt="copertina">
                </div> 
@endif
    </div>

    <div class="mb-3">
        <textarea class="form-control" name="description" value={{$videogame->description}} id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
<button type="submit" class="btn btn-primary">Salva</button>
<a class="btn btn-warning" href="{{route ("videogames.index")}}">Torna alla lista</a>

</form>
@endsection