@extends('layouts.app')

@section('body')
    
    <div class="card border" style="margin-top:24px;">
        <div class="card-body">
        <h5 class="card-title">Nova proposta</h5>
            <form action="/propostas/{{$proposal->id}}" method="POST">

                <div class="form-group">
                @csrf

                    <label for="client_id">Cliente:</label>
                    <input type="text" class="form-control" name="client_id" value="{{$proposal->client->razao_social}}" readonly/>
                      
                    
                    <label for="servico">Serviços</label>
                    <input class="form-control {{ $errors->has('servico') ? 'is-invalid' : ''}}" id="servico" name="servico" type="text" value="{{$proposal->servico}}">
@if( $errors->has('servico'))
                    <div class="invalid-feedback">
{{ $errors->first('servico')}}                        
                    </div>
@endif     

                    <label for="valorTotal">Valor Total</label>
                    <input class="form-control {{ $errors->has('valorTotal') ? 'is-invalid' : ''}}" id="valorTotal" name="valorTotal" type="text" value="{{$proposal->valor_total}}">
@if( $errors->has('valorTotal'))
                    <div class="invalid-feedback">
{{ $errors->first('valorTotal')}}                        
                    </div>
@endif                   

                    <label for="sinal">Sinal</label>
                    <input class="form-control {{ $errors->has('sinal') ? 'is-invalid' : ''}}" id="sinal" name="sinal" type="text" value="{{$proposal->sinal}}">
@if( $errors->has('sinal'))
                    <div class="invalid-feedback">
{{ $errors->first('sinal')}}                        
                    </div>
@endif     

                    <label for="quantidadeDeParcelas">Quantidade de Parcelas</label>
                    <input class="form-control {{ $errors->has('quantidadeDeParcelas') ? 'is-invalid' : ''}}" id="quantidadeDeParcelas" name="quantidadeDeParcelas" type="text" value="{{$proposal->quantidade_de_parcelas}}">
@if( $errors->has('quantidadeDeParcelas'))
                    <div class="invalid-feedback">
{{ $errors->first('quantidadeDeParcelas')}}                        
                    </div>
@endif     

                    <label for="valorDasParcelas">Valor das Parcelas</label>
                    <input class="form-control {{ $errors->has('valorDasParcelas') ? 'is-invalid' : ''}}" id="valorDasParcelas" name="valorDasParcelas" type="text" value="{{$proposal->valor_das_parcelas}}">
@if( $errors->has('valorDasParcelas'))
                    <div class="invalid-feedback">
{{ $errors->first('valorDasParcelas')}}                        
                    </div>
@endif     

                    <label for="dataDeInicioDePagamento">Data de inicio de pagamento</label>
                    <input class="form-control {{ $errors->has('dataDeInicioDePagamento') ? 'is-invalid' : ''}}" id="dataDeInicioDePagamento" name="dataDeInicioDePagamento" type="text" value="{{$proposal->data_de_inicio_de_pagamento}}">
@if( $errors->has('dataDeInicioDePagamento'))
                    <div class="invalid-feedback">
{{ $errors->first('dataDeInicioDePagamento')}}                        
                    </div>
@endif     
                    <label for="dataDasParcelas">Data das Parcelas</label>
                    <input class="form-control {{ $errors->has('dataDasParcelas') ? 'is-invalid' : ''}}" id="dataDasParcelas" name="dataDasParcelas"type="text" value="{{$proposal->data_das_parcelas}}">
@if( $errors->has('dataDasParcelas'))
                    <div class="invalid-feedback">
{{ $errors->first('dataDasParcelas')}}                        
                    </div>
@endif     

                    <label for="status">Status</label>
                    <select class="custom-select" name="status" value="{{$proposal->status}}">
                        <option value="em aberto">Em aberto</option>
                        <option value="fechada">Fechada</option>
                    </select>

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>

@endsection