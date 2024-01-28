@extends('_layouts.admin')

@section('contenido')
    <div class="card">
        <div class="card-header">
            <strong>{{ $categoria->nombre }}</strong>
        </div>
        <div class="card-body">
            <form method="POST"
                  action="{{ action([\App\Http\Controllers\Backend\CategoriasController::class, 'update'], $categoria) }}">
                @csrf
                @method('patch')

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text"
                                   id="nombre"
                                   name="nombre"
                                   value="{{ $categoria->nombre }}"
                                   class="form-control"
                                   placeholder="Ingrese un nombre"
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








