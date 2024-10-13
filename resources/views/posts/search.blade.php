@extends('layouts.app')

@section('title', 'Resultados da Busca')

@section('content')
    <div class="container">
        <h1>Resultados da Busca</h1>

        @if ($posts->isEmpty())
            <div class="alert alert-warning">Nenhum post encontrado.</div>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Tema</th>
                    <th class="text-right">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->theme }}</td>
                        <td class="text-right">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir este post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
