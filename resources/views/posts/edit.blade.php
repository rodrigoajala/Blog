@extends('layouts.app')

@section('content')
    <h2>Editar Post</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control" required>{{ $post->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="theme">Tema</label>
            <input type="text" name="theme" id="theme" class="form-control" value="{{ $post->theme }}" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
