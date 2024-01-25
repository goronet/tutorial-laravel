@extends('_layouts/layout')

@section('main')

    <h1>HOME</h1>

    <h3>CATEGORÍAS</h3>
    <div class="container">
        <div class="row">
            @foreach($categorias as $categoria)
                <div class="col-12">
                    <h5>{{ $categoria->nombre }}</h5>
                </div>

                @foreach($categoria->productos as $producto)
                    <div class="col-12 col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>

    {{--    @include('_includes/productos')--}}
@endsection
