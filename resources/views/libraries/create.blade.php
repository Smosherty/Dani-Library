@extends('layout')
  
@section('content')

<div class="card mt-5">
  <h2 class="card-header">Añadir un libro</h2>
  <div class="card-body">

    <form action="{{ route('libraries.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label"><strong>Nombre:</strong></label>
            <input type="text" name="title" class="form-control" placeholder="Titulo">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label"><strong>Autor:</strong></label>
            <input type="text" name="author" class="form-control" placeholder="Autor">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label"><strong>Genero:</strong></label>
            <input type="text" name="genre" class="form-control" placeholder="Genero">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"><strong>Descripcion:</strong></label>
            <input type="text" name="description" class="form-control" placeholder="Descripcion">
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label"><strong>ISBN:</strong></label>
            <input type="text" name="isbn" class="form-control" placeholder="ISBN">
        </div>
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>

  </div>
</div>
@endsection
