@extends('admin.layouts.app')

@section('title','Editar o Post')

@section('content')
<h1>Editar o Post <strong>{{ $post->title }}</strong></h1>
<div>
    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @include('admin.posts._partials.form')
    </form>
</div>

@endsection