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
                    <td>{{ $client->nome }}</td>
                    <td>{{ $client->endereco }}</td>
                    <td>
                        <a class="btn btn-outline-secondary rounded-circle" href="{{ route('clients.show', $client) }}">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <a class="btn btn-outline-primary rounded-circle" href="{{ route('clients.show', $client) }}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a class="btn btn-outline-danger rounded-circle" href="{{ route('clients.show', $client) }}">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
