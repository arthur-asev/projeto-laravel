<link  href="{{ url('css/dogs.css')}}" rel="stylesheet">

<h1>Cachorro</h1>
<ul class="dogs-list">
    <li>Nome: {{$dogs->nome}}</li>
    <li>Raça: {{$dogs->raca}}</li>
    <li>Porte: {{$dogs->porte}}</li>
</ul>

<img  src="{{ url("storage/{$dogs->image}") }}"
    alt="{{$dogs->name}}" style="max-width:100px;">