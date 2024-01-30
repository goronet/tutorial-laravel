@extends('_layouts.admin')

@section('contenido')

    @include('admin._modules.success')

    <table class="table table-responsive-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nombre  }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary"
                               href="{{ action([\App\Http\Controllers\Backend\CategoriasController::class, 'edit'], $categoria) }}">Editar
                            </a>

                            <form method="POST"
                                  action="{{ action([\App\Http\Controllers\Backend\CategoriasController::class, 'destroy'], $categoria) }}">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger ml-3"
                                        onclick="return confirm('¿Deseas eliminar esta categoría?')">Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
