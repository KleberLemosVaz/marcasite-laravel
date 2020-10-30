@extends('layouts.app')

@section('body')
    
<div class="card border" style="margin-top:24px;">
        <div class="card-body">
            <h5 class="card-title">Propostas</h5>
            <a href="propostas/export" class="btn btn-secondary" style="margin-bottom:24px;">Fazer o download das propostas (Excel)</a>

            <form action="/search" method="get" class="form form-inline" style="margin-bottom:24px;">
                @csrf
                <input type="filter" class="form-control" placeholder="Pesquise pelo ID ou Status" name="search">
                <button type="submit" class="btn btn-primary btn-sm">Pesquisar</button>
            </form>

            <table class="table table-ordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Cliente</th>
                        <th scope="col">Proposta feita em</th>
                        <th scope="col">Início do pgto.</th>
                        <th scope="col">Serviços</th>
                        <th scope="col">Quantidade de parcelas</th>
                        <th scope="col">Sinal</th>
                        <th scope="col">Valor da parcela R$</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
@foreach($proposals as $proposal)
                    <tr>
                        <th scope="row">{{$proposal->client->razao_social}}</th>
                        <td>{{$proposal->created_at}}</td>
                        <td>{{$proposal->data_de_inicio_de_pagamento}}</td>
                        <td>{{$proposal->servico}}</td>
                        <td>{{$proposal->quantidade_de_parcelas}}</td>
                        <td>{{$proposal->sinal}}</td>
                        <td>{{$proposal->valor_das_parcelas}}</td>
                        <td>{{$proposal->valor_total}}</td>
                        <td>{{$proposal->status}}</td>
                        <td>
                            <a href="propostas/editar/{{$proposal->id}}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                    </tr>
@endforeach                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="propostas/novo" class="btn bt-sm btn-primary">Nova proposta</a>
        </div>   
    </div>


@endsection