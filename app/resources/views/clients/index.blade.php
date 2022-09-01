@extends('partials/base')
@section('titulo', 'Lista de Clientes')
@section('conteudo')

    <div class="row">
        <div class="col">
            <h1>Listagem de Clientes</h1>
        </div>
        <div class="col d-flex justify-content-end align-items-center">
            <a href="{{ route('clients.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> &nbsp;&nbsp; Criar novo
            </a>
        </div>
    </div>

    <table class="container table mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>
                        <a href="{{ route('clients.show', $client) }}">
                            {{ $client->nome }}
                        </a>
                    </td>
                    <td>{{ $client->endereco }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
