<!-- Trazendo o template -->
@extends('app')

@section('titulo', 'Novo Cliente')

@section('conteudo')
<div class="card">
    <div class="card-header">
        Novo Cliente
    </div>
    <div class="card-body">
        <form action="{{ route('clients.store') }}" method="POST">
            <!-- Token de verificação do laravel -->
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea class="form-control" id="observacao" name="observacao" placeholder="Digite a observação" rows="3" required></textarea>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection