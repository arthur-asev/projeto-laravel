

@extends('admin.layouts.app')

@section('title', "Criar um novo Post");

@section('content')
<h3>Novo Post</h3>

<form  class="form-group form-conf" method="POST" action="{{ route('posts.store')}}" enctype="multipart/form-data">
    @include('admin.posts._partials.form')
</form>
@endsection
