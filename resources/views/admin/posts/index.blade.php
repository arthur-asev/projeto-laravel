<h1>Listagem dos Posts</h1>

<div class="grid">
    <a href="{{ route('posts.create') }}" >Criar Novo Post</a>
</div>

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
