@extends('partials/base')
@section('titulo', 'Principal')
@section('conteudo')
    <div class="mx-auto col-12 col-md-6 card border-rounded text-center">
        <div class="card-body p-5">
            <div class="container">
                <main class="px-3">
                    <h1>CRUD em Laravel.</h1>
                    <p class="lead mt-4">
                        CRUD simples em Laravel permitindo Cadastrar, Editar, Visualizar Clientes ou Funcionários.
                    </p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <a href="{{ route('clients.index') }}"
                                class="btn btn-lg btn-primary border-rounded fw-bold border-white">
                                <i class="fas fa-users me-2"></i> Clientes
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('clients.index') }}"
                                class="btn btn-lg btn-primary border-rounded fw-bold border-white">
                                <i class="fas fa-briefcase me-2"></i>
                                Funcionários
                            </a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
