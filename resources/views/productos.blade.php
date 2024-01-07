@extends('_layouts.layout')

@section('main')
    <h3>PRODUCTOS</h3>
    <div class="container">
        <div class="row">
            @foreach($productos as $producto)
                <div class="col-12 col-sm-3 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
