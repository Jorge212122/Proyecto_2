<div>
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="Nombre" value="{{old('nombre', $libro->nombre)}}">
        </div>
        <div class="col-sm-12">
            <input type="text" name="autor" id="InputAutor" class="form-control" placeholder="Autor" value="{{old('autor', $libro->autor)}}">
        </div>
        <div class="col-sm-12">
            <input type="text" name="precio" id="InputPrecio" class="form-control" placeholder="Precio" value="{{old('precio', $libro->precio)}}">
        </div>
        <div class="col-sm-12">
            <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control" placeholder="Descripcion del producto" value="{{old('descripcion', $libro->descripcion)}}"></textarea>
        </div>
        <div class="col-sm-12 text-end my-2">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </div>
    </div>
</div>
