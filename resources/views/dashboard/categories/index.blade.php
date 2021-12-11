@extends('dashboard/master')
@section('content')
    <h6>Listar categorias</h6> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Categoría</th>
            <th scope="col">Contenido</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categories)
            <tr>
                <th scope="row">{{ $category -> id }}</th>
                <td>{{ $post -> category }}</td>
                <td>{{ $post -> content_category }}</td>
                <td>
                    <a href="{{ route ('category.show', $category -> id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route ('category.edit', $category -> id) }}" class="btn btn-info">Editar</a>
                    <a href="{{ route ('category.destroy', $category -> id) }}" class="btn btn-danger">Eliminar</a> 
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>     
@endsection