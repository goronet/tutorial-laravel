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
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre  }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary"
                               href="{{ action([\App\Http\Controllers\Backend\ProductoController::class, 'edit'], $producto) }}">Editar
                            </a>

                            <form method="POST"
                                  action="{{ action([\App\Http\Controllers\Backend\ProductoController::class, 'destroy'], $producto) }}">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger ml-3"
                                        onclick="return confirm('¿Deseas eliminar este producto?')">Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
