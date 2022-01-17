@extends('admin.layouts.app')

@section('content')

<h1>Editar o Post <strong>{{ $post->title }}</strong></h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>



</div>
@endif

<form method="post" action="{{ route('posts.update', $post->id )}}">

    <input type="text" name="title" id="title" placeholder="Título" value="{{ $post->title }}">
    @csrf
    @method('put')
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo">{{ $post->content }}</textarea>
    <button type="submit">Enviar</button>


</form>

    
@endsection