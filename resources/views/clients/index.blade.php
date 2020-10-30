@extends('layouts.app')

@section('body')
    
    <div class="card border" style="margin-top:24px;">
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
            <div class="table-responsive">
            <table class="table table-ordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Razão Social</th>
                        <th scope="col">Nome Fantasia</th>
                        <th scope="col">CNPJ</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Nome do Responsável</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
@foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->razao_social}}</td>
                        <td>{{$client->nome_fantasia}}</td>
                        <td>{{$client->cnpj}}</td>
                        <td>{{$client->endereco}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->telefone}}</td>
                        <td>{{$client->nome_do_responsavel}}</td>
                        <td>{{$client->cpf}}</td>
                        <td>{{$client->celular}}</td>
                        <td>
                            <a href="clientes/editar/{{$client->id}}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                    </tr>
@endforeach                
                </tbody>
            </table>
            </div>
        </div>
        <div class="card-footer">
            <a href="clientes/novo" class="btn bt-sm btn-primary">Novo cliente</a>
        </div>   
    </div>

@endsection