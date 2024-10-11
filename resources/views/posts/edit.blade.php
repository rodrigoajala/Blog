@extends('layouts.app')

@section('title', 'Editar Post')

@section('content')
    <div class="container">
        <h1>Editar Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" name="description" id="description" rows="5" required>{{ $post->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="theme" class="form-label">Tema</label>
                <input type="text" class="form-control" name="theme" id="theme" value="{{ $post->theme }}" required>
            </div>
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
