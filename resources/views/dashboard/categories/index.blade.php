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
                  <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                      <a class="btn btn-sm btn-primary " href="{{ route('post.show',$post->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                      <a class="btn btn-sm btn-success" href="{{ route('post.edit',$post->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button> 
                  </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>    
      {{ $categories->links() }} 
@endsection