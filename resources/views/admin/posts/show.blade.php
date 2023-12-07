@extends('admin.layouts.app')

@section('title', 'Detalhes do Post')

@section('content')
<h1>Detalhes do Post {{$post->title}}</h1>
<div class="post-details">
    <ul>
        <li><strong>Titulo: </strong>{{$post->title}}</li>
        <li><strong>Imagem: </strong></li>
        <li> <img class="image-details" src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}"></li>
        <li><strong>Descrição: </strong>{{$post->content}}</li>

    </ul>
</div>
<form class="form-conf" action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-primary btn-p2" type="submit">Deletar o Post</button>
</form>

@endsection