@extends('layout.app', ["current"=>"produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <h5 class="card-title" for="nomeProduto">Cadastro de Produtos</h5>
                    </br>
                    <div class="form-group">
                        <label for="nomeProduto" class="control-label">Nome do Produto</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do produto">
                        </div>
                    </div>
                    </br>
                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Preço</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="precoProduto" placeholder="Preço do produto">
                        </div>
                    </div>
                    </br>
                    <div class="form-group">
                        <label for="estoqueProduto" class="control-label">Quantidade</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="estoqueProduto"
                                   placeholder="Quantidade do produto">
                        </div>
                    </div>
                    </br>
                    <div class="form-group">
                        <label for="categoriaProduto" class="control-label">Categoria</label>
                        <div class="input-group">
                            <select class="form-control" id="categoriaProduto">
                            </select>
                        </div>
                    </div>
                </div>
                </br>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>

        </div>

    </div>
@endsection
