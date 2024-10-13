@extends('layouts.app')

@section('title', 'Lista de Posts')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <form action="{{ route('posts.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por título ou tema">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Criar Novo Post</a>
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
    </div>
@endsection
