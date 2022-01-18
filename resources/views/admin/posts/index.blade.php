@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')

@section('content')
<h1>Listagem dos Posts</h1>

<div class="grid">
    <a href="{{ route('posts.create') }}">Criar Novo Post</a>
</div>

@if (session('message'))
<div>
    {{ session('message')}}
</div>
@endif

<form action="{{ route('posts.search')}}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Filtrar</button>
</form>
<h1>Posts</h1>
@foreach ($posts as $post)
<img src="{{ url("storage/{$post->image}") }}" alt="{{$post->title}}" style="max-width:100px;">
<tr>
    <td>
        #{{ $post->id }}
    </td>
    <td>{{ $post->title }}</td>
    <td>
        <a href="{{ route('posts.show', $post->id) }}">Ver</a>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
    </td>
</tr>
@endforeach

<div>
    @if (isset($filters))
    {{ $posts->appends($filters)->links() }}
    @else
    {{ $posts->links() }}
    @endif
</div>

@endsection
