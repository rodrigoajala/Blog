@extends('layouts.app')

@section('title', 'Detalhes do Post')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $post->title }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Descrição:</strong> {{ $post->description }}</p>
                <p><strong>Tema:</strong> {{ $post->theme }}</p>
            </div>
            <div class="card-footer text-right">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir este post?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
