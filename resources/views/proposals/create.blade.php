@extends('layouts.app')

@section('body')
    
    <div class="card border" style="margin-top:24px;">
        <div class="card-body">
        <h5 class="card-title">Nova proposta</h5>
            <form action="/propostas" method="POST">


                <div class="form-group">
                @csrf

                <label for="client_id">Cliente:</label>
                    <select class="custom-select" name="client_id">
                        @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->razao_social}}</option>
                        @endforeach
                    </select>
                    
                    <label for="servico">Serviços</label>
                    <input class="form-control {{ $errors->has('servico') ? 'is-invalid' : ''}}" id="servico" name="servico" type="text">
@if( $errors->has('servico'))
                    <div class="invalid-feedback">
{{ $errors->first('servico')}}                        
                    </div>
@endif     

                    <label for="valorTotal">Valor Total</label>
                    <input class="form-control {{ $errors->has('valorTotal') ? 'is-invalid' : ''}}" id="valorTotal" name="valorTotal" type="text">
@if( $errors->has('valorTotal'))
                    <div class="invalid-feedback">
{{ $errors->first('valorTotal')}}                        
                    </div>
@endif                   

                    <label for="sinal">Sinal</label>
                    <input class="form-control {{ $errors->has('sinal') ? 'is-invalid' : ''}}" id="sinal" name="sinal" type="text">
@if( $errors->has('sinal'))
                    <div class="invalid-feedback">
{{ $errors->first('sinal')}}                        
                    </div>
@endif     

                    <label for="quantidadeDeParcelas">Quantidade de Parcelas</label>
                    <input class="form-control {{ $errors->has('quantidadeDeParcelas') ? 'is-invalid' : ''}}" id="quantidadeDeParcelas" name="quantidadeDeParcelas" type="text">
@if( $errors->has('quantidadeDeParcelas'))
                    <div class="invalid-feedback">
{{ $errors->first('quantidadeDeParcelas')}}                        
                    </div>
@endif     

                    <label for="valorDasParcelas">Valor das Parcelas</label>
                    <input class="form-control {{ $errors->has('valorDasParcelas') ? 'is-invalid' : ''}}" id="valorDasParcelas" name="valorDasParcelas" type="text">
@if( $errors->has('valorDasParcelas'))
                    <div class="invalid-feedback">
{{ $errors->first('valorDasParcelas')}}                        
                    </div>
@endif     

                    <label for="dataDeInicioDePagamento">Data de inicio de pagamento</label>
                    <input class="form-control {{ $errors->has('dataDeInicioDePagamento') ? 'is-invalid' : ''}}" id="dataDeInicioDePagamento" name="dataDeInicioDePagamento" type="text">
@if( $errors->has('dataDeInicioDePagamento'))
                    <div class="invalid-feedback">
{{ $errors->first('dataDeInicioDePagamento')}}                        
                    </div>
@endif     
                    <label for="dataDasParcelas">Data das Parcelas</label>
                    <input class="form-control {{ $errors->has('dataDasParcelas') ? 'is-invalid' : ''}}" id="dataDasParcelas" name="dataDasParcelas"type="text">
@if( $errors->has('dataDasParcelas'))
                    <div class="invalid-feedback">
{{ $errors->first('dataDasParcelas')}}                        
                    </div>
@endif     

                    <label for="status">Status</label>
                    <select class="custom-select" name="status">
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