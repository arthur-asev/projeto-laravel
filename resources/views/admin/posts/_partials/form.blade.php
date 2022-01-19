@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>
        {{ $error }}
    </li>
    @endforeach
</ul>
@endif


@csrf
<input class="form-control mb2" type="text" name="title" id="title" placeholder="Título" value="{{ $post->title ?? old('title') }}">
<textarea class="form-control " name="content" id="content" cols="30" rows="4"
    placeholder="Conteúdo">{{ $post->content ?? old('content') }}</textarea>
    <label class="label-file mb2" for="image">Enviar arquivo</label>
    <input  type="file" name="image" id="image">
<button class=" btn btn-outline-success " type="submit">Enviar</button>