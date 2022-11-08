<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link"  href="/">Home</a>
                </li>
                <li @if($current=="produtos") class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="/produtos">Produtos</a>
                </li>
                <li @if($current=="categorias") class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="/categorias">Categorias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
