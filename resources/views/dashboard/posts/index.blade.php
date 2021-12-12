@extends('dashboard/master')
@section('content')
    <h6>Listar publicaciones</h6> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Publicación</th>
            <th scope="col">Contenido</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post -> id }}</th>
                <td>{{ $post -> publication }}</td>
                <td>{{ $post -> content_publication }}</td>                
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
      {{ $posts->links() }}  
@endsection