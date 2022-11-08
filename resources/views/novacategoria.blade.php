@extends('layout.app', ["current"=>"categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <h5 class="card-title" for="nomeCategoria">Cadastro de Categorias</h5>
                    </br>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria">
                </div>
                </br>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>

        </div>

    </div>
@endsection
