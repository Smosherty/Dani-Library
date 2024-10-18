@extends('layout')
 
@section('content')

<div class="card mt-5">
  <h2 class="card-header">Mira</h2>
    <button class="btn btn-success btn-sm" href="{{ route('libraries.index') }}"><i class="fa-solid fa-trash"></i> Ver libros</button>
</div>  
@endsection