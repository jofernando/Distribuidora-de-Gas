@extends('layouts.app')

@section('content')
    <form action="/clientes" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" value="{{ old('nome') }}">
        </div>
        <div class="form-group">
            <label for="CPF">CPF:</label>
            <input class="form-control" type="text" name="CPF" id="CPF" value="{{ old('CPF') }}">
        </div>
        <div class="form-group">
            <label for="nascimento">nascimento:</label>
            <input class="form-control" type="date" name="nascimento" id="nascimento" value="{{ old('nascimento') }}">
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="senha">senha:</label>
            <input class="form-control" type="password" name="senha" id="senha">
        </div>
        <div class="form-group">
            <label for="senha_confirmation">senha confirmation:</label>
            <input class="form-control" type="password" name="senha_confirmation" id="senha_confirmation">
        </div>
        <div class="form-group">
            <label for="telefone">telefone:</label>
            <input class="form-control" type="text" name="telefone" id="telefone" value="{{ old('telefone') }}">
        </div>
        <div class="form-group">
            <label for="tipo">tipo</label>
            <div class="radio">
                <label><input type="radio" name="tipo" value="consumidor" id="consumidor">consumidor</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="tipo" value="revendedor" id="revendedor">revendedor</label>
            </div>
        </div>
        <div class="form-group">
            <label for="rua">rua:</label>
            <input class="form-control" type="text" name="rua" id="rua" value="{{ old('rua') }}">
        </div>
        <div class="form-group">
            <label for="bairro">bairro:</label>
            <input class="form-control" type="text" name="bairro" id="bairro" value="{{ old('bairro') }}">
        </div>
        <div class="form-group">
            <label for="CEP">CEP:</label>
            <input class="form-control" type="text" name="CEP" id="CEP" value="{{ old('CEP') }}">
        </div>
        <div class="form-group">
            <label for="numero">numero:</label>
            <input class="form-control" type="text" name="numero" id="numero" value="{{ old('numero') }}">
        </div>
        <div class="form-group">
            <label for="cidade">cidade:</label>
            <input class="form-control" type="text" name="cidade" id="cidade" value="{{ old('cidade') }}">
        </div>
        <input class="btn btn-primary" type="submit" value="cadastrar">
    </form>
@endsection
