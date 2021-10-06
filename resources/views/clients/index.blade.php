@extends('app')

@section('titulo', 'Lista de Clientes')

@section('conteudo')
<div class="card">
    <div class="card-header">
        Lista de Clientes
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <th scope="row">{{ $client->id }}</th>
                        <td>{{ $client->nome }}</td>
                        <td>{{ $client->endereco }}</td>
                        <td>{{ $client->observacao }}</td>
                        <td><a class="btn btn-info btn-sm text-white my-1" href="{{ route('clients.edit', $client) }}">Atualizar</a>
                            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                                <a class="btn btn-success btn-sm text-white my-1" href="{{ route('clients.show', $client) }}">Detalhes</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary mt-3" href="{{ route('clients.create') }}">Novo Cliente</a>
    </div>
</div>
@endsection