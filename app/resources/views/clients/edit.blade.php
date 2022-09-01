@extends('partials/base')
@section('titulo', 'Editar Cliente')
@section('conteudo')
    <form action="{{ route('clients.update', $client) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <h5 class="card-header">
                <a href="{{ route('clients.index') }}" class="text-dark text-decoration-none">
                    <i class="fas fa-arrow-left text-dark"></i> &nbsp;
                </a>
                Editar Cliente
            </h5>
            <div class="card-body mt-2">
                <div class="row ">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="nome" value="{{ $client->nome }}" placeholder="Insira um nome" class="form-control"
                            name="nome" id="nome" aria-describedby="nome">
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input rows="5" type="text" value="{{ $client->endereco }}"placeholder="Insira um endereço"
                            class="form-control" name="endereco" id="endereco" aria-describedby="endereco">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="observacao" class="form-label">Observação</label>
                    <textarea rows="5" placeholder="Insira uma observação" class="form-control" name="observacao" id="observacao"
                        aria-describedby="endereco">{{ $client->observacao }}</textarea>
                </div>

                <div class="d-flex alig-items-center justify-content-center">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-edit"></i> &nbsp; Editar
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
