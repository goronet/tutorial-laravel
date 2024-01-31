@extends('_layouts.admin')

@section('contenido')
    <div class="card">
        <div class="card-header">
            <strong>Producto</strong>
        </div>
        <div class="card-body">

            @include('admin._modules.errores')

            <form method="POST"
                  action="{{ action([\App\Http\Controllers\Backend\ProductoController::class, 'update'], $producto) }}">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="categoria_id">Categoría</label>
                            <select id="categoria_id" name="categoria_id" class="form-control">
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}"
                                            @if($producto->categoria_id == $categoria->id) selected @endif>{{ $categoria->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text"
                                   id="nombre"
                                   name="nombre"
                                   class="form-control"
                                   placeholder="Ingrese un nombre"
                                   value="{{ $producto->nombre }}"
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text"
                                   id="stock"
                                   name="stock"
                                   class="form-control"
                                   placeholder="Ingrese un stock"
                                   value="{{ $producto->stock }}"
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text"
                                   id="precio"
                                   name="precio"
                                   class="form-control"
                                   placeholder="Ingrese un precio"
                                   value="{{ $producto->precio }}"
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection








