@extends('dashboard/master')
@section('content')
    <h6>Mostrar categorias</h6>    
    <div class="form-group">
        <input readonly class="form-control" type="text" name="category" id="category"
            placeholder="Categoría" value="{{ $category->category }}">
    </div>

    <div class="form-group">
        <textarea readonly class="form-control" name="category_description" id="category_description" 
        cols="30" rows="10" placeholder="Descripción de Categoria">
            {{ $category->category_description }}
        </textarea>
    </div>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
@endsection