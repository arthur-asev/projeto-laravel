@extends('admin.layouts.app')

@section('content')
<h1>Cadastrar novo Post</h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>



</div>
@endif

<form method="POST" action="{{ route('posts.store')}}">

    <input type="text" name="title" id="title" placeholder="Título" value="{{ old('title') }}">
    @csrf
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo">{{old('content')}}</textarea>
    <button type="submit">Enviar</button>


</form>
@endsection
