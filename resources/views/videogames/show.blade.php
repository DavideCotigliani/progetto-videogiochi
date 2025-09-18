@extends('layouts.videogames') 
@section('title', 'Singolo videogioco')

@section('content')

<div class="card" style="width: 18rem;">
         @if ($videogame->image)
<div id="videogame-image">
  <img class="card-img-top" src="{{asset("storage/" . $videogame->image)}}" alt="copertina">
</div> 
@endif

  <div class="card-body">
    <h4 class="card-title">{{$videogame->name}}</h4>
    <h5 class="card-title">{{$videogame->release_year}}</h5>
    <p class="card-text">{{$videogame->description}}</p>
  </div>
</div>
<div class="d-flex gap-1" >
    <a class="btn btn-warning" href="{{route ("videogames.edit", $videogame)}}">Modifica</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Elimina
</button>
    <a class="btn btn-primary" href="{{route ("videogames.index")}}">Torna alla lista</a>

</div>
{{-- Per eliminare il videogioco --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elimina il videogioco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il videogioco?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
          <form action="{{route ("videogames.destroy", $videogame)}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-danger" value="Elimina definitivamente" >
    </form>
      </div>
    </div>
  </div>
</div>
@endsection