@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input type="text" class="form-control" name="publication" id="publication"
    placeholder="Nombre de la publicacion" value="{{ old('publication', $post -> publication) }}">
</div>
<div class="form-group">
    <select name="state_publication" id="state_publication" class="form-control"> 
        <option value="">Publicado</option>
        <option value="">No publicado</option>
        <option value="">En revision</option>
    </select>
</div>
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
    placeholder="Contenido de la publicacion">
        {{ old('content_publication', $post -> content_publication) }}
    </textarea>
</div>
<button type="submit" class="btn btn-success">Aceptar</button>
<button class="btn btn-danger" href="{{ URL::previous()}}">Cancelar</button>
