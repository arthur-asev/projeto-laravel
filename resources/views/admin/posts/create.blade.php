@extends('admin.layouts.app')

@section('title', "Criar um novo Post");

@section('content')
<h1>Novo Post</h1>

<form method="POST" action="{{ route('posts.store')}}" enctype="multipart/form-data">
    @include('admin.posts._partials.form')
</form>
@endsection
