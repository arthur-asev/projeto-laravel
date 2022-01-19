<h1>Cachorros</h1>
<ul>
    <li>{{$dogs->nome}}</li>
    <li>{{$dogs->raca}}</li>
    <li>{{$dogs->porte}}</li>
</ul>

<img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" src="{{ url("storage/{$dogs->image}") }}"
    alt="{{$dogs->name}}" style="max-width:100px;">