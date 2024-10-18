@extends('layout')
 
@section('content')

<div class="card mt-5">
  <h2 class="card-header">Biblioteca de Dani</h2>
  <div class="card-body">
        
        @session('session')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('libraries.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Género</th>
                    <th>Descripción</th>
                    <th>ISBN</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($libraries as $library)
                <tr>
                    <td>{{ $library->title }}</td>
                    <td>{{ $library->author }}</td>
                    <td>{{ $library->genre }}</td>
                    <td>{{ $library->description }}</td>
                    <td>{{ $library->isbn }}</td>
                    <td>
                        <form action="{{ route('libraries.destroy',$library->id) }}" method="POST">
            
                            <a class="btn btn-primary btn-sm" href="{{ route('libraries.edit',$library->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
           
                            @csrf
                            @method('DELETE')
              
                            <button type="submit" class="btn btn-danger btn-sm" href="{{ route('libraries.destroy',$library->id) }}"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay libros la biblioteca está vacía</td>
                </tr>
            @endforelse
            </tbody>

        </table>
      
        {{-- {!! $libraries->links() !!} --}}

  </div>
</div>  
@endsection