@extends('layouts.app')

@section('content')
    <h2>Criar Novo Post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="theme">Tema</label>
            <input type="text" name="theme" id="theme" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Criar Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
