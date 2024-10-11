@extends('layouts.app')

@section('title', 'Criar Novo Post')

@section('content')
    <div class="container">
        <h1>Criar Novo Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="theme" class="form-label">Tema</label>
                <input type="text" class="form-control" name="theme" id="theme" required>
            </div>
            <button type="submit" class="btn btn-success">Criar Post</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
