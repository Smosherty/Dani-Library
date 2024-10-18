@extends('layout')
  
@section('content')

<div class="card mt-5">
  <h2 class="card-header">Añadir un libro</h2>
  <div class="card-body">

    <form action="{{ route('libraries.update', $library->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label"><strong>Nombre:</strong></label>
            <input type="text" name="title" class="form-control" placeholder="Titulo" value="{{ $library->title }}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label"><strong>Autor:</strong></label>
            <input type="text" name="author" class="form-control" placeholder="Autor" value="{{ $library->author }}">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label"><strong>Genero:</strong></label>
            <input type="text" name="genre" class="form-control" placeholder="Genero" value="{{ $library->genre }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"><strong>Descripcion:</strong></label>
            <input type="text" name="description" class="form-control" placeholder="Descripcion" value="{{ $library->description }}">
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label"><strong>ISBN:</strong></label>
            <input type="text" name="isbn" class="form-control" placeholder="ISBN" value="{{ $library->isbn }}">
        </div>
        <button type="submit" class="btn btn-success" href="{{ route('libraries.update', $library->id) }}">Actualizar</button>
    </form>

  </div>
</div>
@endsection
