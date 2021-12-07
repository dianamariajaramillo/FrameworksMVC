@csrf
@include('dashboard.structure.validation-errors')
<div class="form-group">
    <input type="text" class="form-control" name="category" id="category"
    placeholder="Nombre de la categoria" value="{{ old('category', 
    $category -> category) }}" >
</div>
<div class="form-group">
    <textarea class="form-control" name="category_description" 
    id="category_description" cols="30" rows="10"
    placeholder="Contenido de la categoria">
       {{ old('category_description', $category -> category_description) }}
    </textarea>
</div>
{{--<button type="submit" class="btn btn-success">Aceptar</button>
<button class="btn btn-danger" href="{{ URL::previous()}}">Cancelar</button>--}}
<div class="mb-3">
    <a href="" class="btn btn-danger btn-sm">Cancelar</a>
    <button type="submit" class="btn btn-info btn-sm">Guardar</button>
</div>

{{-- tener en cuenta el name,id ya que no se como va a quedar --}}