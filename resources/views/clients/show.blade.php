@extends('app')

@section('titulo', 'Detalhes do Cliente')

@section('conteudo')
<div class="card">
    <div class="card-header">
        Detalhes do cliente {{ $client->nome }}
    </div>
    <div class="card-body">
        <p class="card-text">Id: {{ $client->id }}</p>
        <p class="card-text">Nome: {{ $client->nome }}</p>
        <p class="card-text">Endereço: {{ $client->endereco }}</p>
        <p class="card-text">Observação: {{ $client->observacao }}</p>
        <a href="{{ route('clients.index') }}" class="btn btn-primary">Voltar para Lista</a>
    </div>
</div>
@endsection