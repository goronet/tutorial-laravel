<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ action([\App\Http\Controllers\Backend\AdminController::class, 'home']) }}">
            <i class="nav-icon la la-lg la-dashboard"></i> Home
        </a>
    </li>
    <li class="nav-title">Administrador</li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon la la-lg la-bank"></i> Categoría
        </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ action([\App\Http\Controllers\Backend\CategoriasController::class, 'create']) }}">
                    <i class="nav-icon la la-lg la-puzzle"></i> Crear
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ action([\App\Http\Controllers\Backend\CategoriasController::class, 'index']) }}">
                    <i class="nav-icon la la-lg la-puzzle"></i> Editar
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon la la-lg la-bank"></i> Productos
        </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ action([\App\Http\Controllers\Backend\ProductoController::class, 'create']) }}">
                    <i class="nav-icon la la-lg la-puzzle"></i> Crear
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ action([\App\Http\Controllers\Backend\ProductoController::class, 'index']) }}">
                    <i class="nav-icon la la-lg la-puzzle"></i> Editar
                </a>
            </li>
        </ul>
    </li>
</ul>
