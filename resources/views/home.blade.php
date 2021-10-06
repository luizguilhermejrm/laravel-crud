@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
<!-- <h1>Home</h1>
<p>Bem vindo ao Sistema! Acesse o cadastro de clientes no menu.</p> -->
<div class="container py-4">
    <div class="h-100 p-5 bg-light border rounded-3">
        <h2>Projeto Crud com Laravel e Blade</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, molestias reprehenderit maxime molestiae obcaecati iste sunt dolor animi porro ullam illum quam soluta unde ut harum temporibus dolore ea placeat!</p>
        <a class="btn btn-primary" href="{{ route('clients.index') }}" role="button">Ir para lista</a>
    </div>
</div>
@endsection