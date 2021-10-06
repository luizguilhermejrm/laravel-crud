@extends('app')

@section('titulo', 'Editar Cliente')

@section('conteudo')

<div class="card">
    <div class="card-header">
        Editar Cliente
    </div>
    <div class="card-body">
        <form action="{{ route('clients.update', $client) }}" method="POST">
            <!-- Token de verificação do laravel -->
            @csrf
            <!-- Atualizar  -->
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" value="{{ $client->nome }}" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" value="{{ $client->endereco }}" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea class="form-control" id="observacao" name="observacao" placeholder="Digite a observação" rows="3" required>{{ $client->observacao }}</textarea>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection