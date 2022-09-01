@extends('partials/base')
@section('titulo', 'Criar novo Cliente')
@section('conteudo')
    <h1>Criar novo Cliente</h1>
    <form action="{{ route('clients.store') }}" method="post">
        @csrf
        <div class="row mt-5">
            <div class="col-12 col-md-6 mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="nome" placeholder="Insira um nome" class="form-control" name="nome" id="nome"
                    aria-describedby="nome">
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input rows="5" type="text" placeholder="Insira um endereço" class="form-control" name="endereco"
                    id="endereco" aria-describedby="endereco">
            </div>
        </div>

        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea rows="5" placeholder="Insira uma observação" class="form-control" name="observacao" id="observacao"
                aria-describedby="endereco"></textarea>
        </div>

        <div class="d-flex alig-items-center justify-content-center">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-plus"></i> &nbsp; Adicionar
            </button>
        </div>
    </form>
@endsection
