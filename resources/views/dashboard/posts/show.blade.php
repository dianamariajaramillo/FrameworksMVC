@extends('dashboard.master')
@section('content')
    <h6>Mostrar publicaciones</h6>    
    <div class="form-group">
        <input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Publicacion" value="{{ $post-> publication }}">
    </div>
    <div class="form-group">
        <select disabled class="form-control" name="state" id="state">
            <option value="">Publicado</option>
            <option value="">No publicado</option>
            <option value="">En revisión</option>
        </select>
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="content_publication" id="content_publication" cols="30" rows="10" placeholder="Contenido de la publicación">
            {{ $post-> content_publication }}
        </textarea>
        
    </div>

    <div>
        <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>

    </div>
@endsection