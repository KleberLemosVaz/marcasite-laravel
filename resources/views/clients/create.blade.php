@extends('layouts.app')

@section('body')
    
    <div class="card border" style="margin-top:24px;">
        <div class="card-body">
        <h5 class="card-title">Novo cliente</h5>
            <form action="/clientes" method="POST">

                <div class="form-group">
                @csrf

                    <label for="razaoSocial">Razão Social</label>
                    <input class="form-control {{ $errors->has('razaoSocial') ? 'is-invalid' : ''}}" id="razaoSocial" name="razaoSocial" type="text">
@if( $errors->has('razaoSocial'))
                    <div class="invalid-feedback">
{{ $errors->first('razaoSocial')}}                        
                    </div>
@endif  

                    <label for="nomeFantasia">Nome Fantasia</label>
                    <input class="form-control {{ $errors->has('nomeFantasia') ? 'is-invalid' : ''}}" id="nomeFantasia" name="nomeFantasia" type="text">
@if( $errors->has('nomeFantasia'))
                    <div class="invalid-feedback">
{{ $errors->first('nomeFantasia')}}                        
                    </div>
@endif  

                    <label for="cnpj">CNPJ</label>
                    <input class="form-control {{ $errors->has('cnpj') ? 'is-invalid' : ''}}" id="cnpj" name="cnpj" type="text">
@if( $errors->has('cnpj'))
                    <div class="invalid-feedback">
{{ $errors->first('cnpj')}}                        
                    </div>
@endif  

                    <label for="endereco">Endereço</label>
                    <input class="form-control {{ $errors->has('endereco') ? 'is-invalid' : ''}}" id="endereco" name="endereco" type="text">
@if( $errors->has('endereco'))
                    <div class="invalid-feedback">
{{ $errors->first('endereco')}}                        
                    </div>
@endif  

                    <label for="email">Email</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email" type="text">
@if( $errors->has('email'))
                    <div class="invalid-feedback">
{{ $errors->first('email')}}                        
                    </div>
@endif  

                    <label for="telefone">Telefone</label>
                    <input class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}" id="telefone" name="telefone" type="text">
@if( $errors->has('telefone'))
                    <div class="invalid-feedback">
{{ $errors->first('telefone')}}                        
                    </div>
@endif  

                    <label for="nomeDoResposavel">Nome do Responsável</label>
                    <input class="form-control {{ $errors->has('nomeDoResposavel') ? 'is-invalid' : ''}}" id="nomeDoResposavel" name="nomeDoResposavel"type="text">
@if( $errors->has('nomeDoResposavel'))
                    <div class="invalid-feedback">
{{ $errors->first('nomeDoResposavel')}}                        
                    </div>
@endif  

                    <label for="cpf">Cpf</label>
                    <input class="form-control {{ $errors->has('cpf') ? 'is-invalid' : ''}}" id="cpf" name="cpf" type="text">
@if( $errors->has('cpf'))
                    <div class="invalid-feedback">
{{ $errors->first('cpf')}}                        
                    </div>
@endif  

                    <label for="celular">Celular</label>
                    <input class="form-control {{ $errors->has('celular') ? 'is-invalid' : ''}}" id="celular" name="celular" type="text">
@if( $errors->has('celular'))
                    <div class="invalid-feedback">
{{ $errors->first('celular')}}                        
                    </div>
@endif                  
                
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>

@endsection