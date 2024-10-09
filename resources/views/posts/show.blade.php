@extends('layouts.app')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p><strong>Descrição:</strong> {{ $post->description }}</p>
    <p><strong>Tema:</strong> {{ $post->theme }}</p>

    <div class="mt-3">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </div>
@endsection
