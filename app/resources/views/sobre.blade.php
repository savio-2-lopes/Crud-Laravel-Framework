@extends('partials/base')
@section('titulo', 'Sobre nós')
@section('conteudo')
    <div class="card text-center">
        <div class="card-body p-5 rounded">
            <div class="container">
                <main class="px-3">
                    <h1>Simples CRUD em Laravel.</h1>
                    <p class="lead">
                        CRUD simples em Laravel permitindo Cadastrar, Editar, Visualizar Clientes.
                    </p>
                    <p class="lead">
                        <a href="{{ route('contact') }}"
                            class="btn btn-lg btn-secondary fw-bold border-white bg-dark">Entre em contato</a>
                    </p>
                </main>
            </div>
        </div>
    </div>
@endsection