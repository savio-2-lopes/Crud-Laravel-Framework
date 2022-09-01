@extends('partials/base')
@section('titulo', 'Detalhes do Cliente')
@section('conteudo')
    <div class="card">
        <h5 class="card-header">
            <a href="{{ route('clients.index') }}" class="text-dark text-decoration-none">
                <i class="fas fa-arrow-left text-dark"></i> &nbsp;
            </a>
            Detalhe do Cliente {{ $client->nome }}
        </h5>
        <div class="card-body">
            <p><strong>ID: </strong>{{ $client->id }}</p>
            <p><strong>Nome: </strong>{{ $client->nome }}</p>
            <p><strong>Endereço: </strong>{{ $client->endereco }}</p>
            <p><strong>Observação: </strong>{{ $client->observacao }}</p>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <a class="btn btn-success" href="{{ route('clients.index') }}">
                    Voltar para a listagem
                </a>
            </div>
        </div>
    </div>
@endsection
