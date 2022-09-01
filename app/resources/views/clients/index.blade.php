@extends('partials/base')
@section('titulo', 'Lista de Clientes')
@section('conteudo')
    <div class="card px-3">
        <div class="card-header row">
            <div class="col d-flex align-items-center">
                <h5>Listagem de Clientes</h5>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <a href="{{ route('clients.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i> &nbsp; Criar novo
                </a>
            </div>
        </div>

        <div class="card-body">
            <table class="container table mt-2">
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
                            <td class="d-flex">
                                <a class="btn btn-outline-secondary rounded-circle"
                                    href="{{ route('clients.show', $client) }}">
                                    <i class="fas fa-search-plus"></i>
                                </a>

                                &nbsp;&nbsp;

                                <a class="btn btn-outline-primary rounded-circle"
                                    href="{{ route('clients.edit', $client) }}">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                &nbsp;&nbsp;

                                <form action="{{ route('clients.destroy', $client) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-outline-danger rounded-circle"
                                        onclick="return confirm('Tem certeza que deseja deletar este item?')"
                                        type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
