@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')

@section('content')



<div class="grid">
    <a href="{{ route('posts.create') }}" >Criar Novo Post</a>
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

        @foreach ($posts as $post)
            <tr>
                <td >
                    #{{ $post->id }}
                </td>
                <td >{{ $post->title }}</td>
                <td >
                    <a href="{{ route('posts.show', $post->id) }}" >Ver</a>
                    <a href="{{ route('posts.edit', $post->id) }}" >Edit</a>
                </td>
            </tr>
        @endforeach

<div >
    @if (isset($filters))
        {{ $posts->appends($filters)->links() }}
    @else
        {{ $posts->links() }}
    @endif
</div>

@endsection