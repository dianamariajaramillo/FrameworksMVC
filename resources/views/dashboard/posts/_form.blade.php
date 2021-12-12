@csrf
@include('dashboard.structure.validation-errors')
<div class="form-group">
    <input type="text" class="form-control" name="publication" id="publication"
    placeholder="Nombre de la publicacion" value="{{ old('publication', 
    $post -> publication) }}">
</div>

<div class="form-group">
    <select class="custom-select" name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Selecciona una opción</option>
        @foreach ($categories as $category => $id)
            <option {{ $post ->category_id == $id ? 'selected="selected"':'' }} value="{{ $id }}">
                {{ $category }}
            </option>
            
        @endforeach
    </select>
</div>

<div class="form-group">
    <select name="state_publication" id="state_publication" class="form-control"> 
        <option value="">Publicado</option>
        <option value="">No publicado</option>
        <option value="">En revision</option>
    </select>
</div>
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" 
    ls="30" rows="10"
    placeholder="Contenido de la publicacion">
        {{ old('content_publication', $post -> content_publication) }}
    </textarea>
</div>
{{--<button type="submit" class="btn btn-success">Aceptar</button>
<button class="btn btn-danger" href="{{ URL::previous()}}">Cancelar</button>
  --}}

  <div class="mb-3">
    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a> {{-- esta bueno --}}
    <button type="submit" class="btn btn-success">Guardar</button>
</div>