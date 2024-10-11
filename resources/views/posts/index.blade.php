@extends('layouts.app')

@section('title', 'Lista de Posts')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Criar Novo Post</a>
        <table class="table">
            <thead>
            <tr>
                <th>Título</th>
                <th>Tema</th>
                <th class="text-right">Ações</th> <!-- Alinhado à direita -->
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->theme }}</td>
                    <td class="text-right"> <!-- Alinhando os botões à direita -->
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
