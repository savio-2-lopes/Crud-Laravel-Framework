@extends('partials/base')
@section('titulo', 'Principal')
@section('conteudo')
    <div class="mx-auto col-12 col-md-6 card border-rounded text-center">
        <div class="card-body p-5">
            <div class="container">
                <main class="px-3">
                    <h1>CRUD em Laravel.</h1>
                    <p class="lead">
                        CRUD simples em Laravel permitindo Cadastrar, Editar, Visualizar Clientes.
                    </p>
                    <p class="lead">
                        <a href="{{ route('clients.index') }}"
                            class="btn btn-lg btn-secondary fw-bold border-white bg-indigo">Visualizar mais</a>
                    </p>
                </main>

            </div>
        </div>
    </div>
@endsection
