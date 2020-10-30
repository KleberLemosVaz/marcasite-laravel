@extends('layouts.app')

@section('body')

    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">
                            Clientes
                        </h5>
                        <p class="card-text">
                            Gerencie seus clientes aqui.
                        </p>
                        <a href="/clientes/novo" class="btn btn-primary">
                            Cadastrar de clientes
                        </a>

                        <a href="/clientes" class="btn btn-secondary">
                            Listar clientes
                        </a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">
                            Propostas
                        </h5>
                        <p class="card-text">
                            Gerencie suas propostas aqui. É fácil e rápido.
                        </p>
                        <a href="/propostas/novo" class="btn btn-primary">
                            Nova proposta
                        </a>

                        <a href="/propostas" class="btn btn-secondary">
                            Listar propostas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection