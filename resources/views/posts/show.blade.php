@extends('layouts.app')

@section('title', 'Detalhes do Post')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p><strong>Descrição:</strong> {{ $post->description }}</p>
        <p><strong>Tema:</strong> {{ $post->theme }}</p>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
