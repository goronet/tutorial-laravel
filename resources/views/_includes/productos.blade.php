<h3>PRODUCTOS</h3>

<div class="container">
    <div class="row">
        @foreach($productos as $producto)
            <div class="col-12 col-sm-3 mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <h6>{{ $producto->categoria->nombre }}</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at
                            corporis distinctio dolorum earum error eveniet ipsum modi nesciunt odio odit praesentium
                            quasi quos rerum vel veritatis vero voluptas voluptatibus.</p>
                        <a href="{{ action([\App\Http\Controllers\ProductoController::class, 'verProducto'], $producto)  }}"
                           class="btn btn-primary">IR AL PRODUCTO
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

