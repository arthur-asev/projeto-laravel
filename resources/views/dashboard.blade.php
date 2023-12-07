<link href="{{ url('css/app.css')}}" rel="stylesheet">
<link href="{{ url('css/index.css')}}" rel="stylesheet">
<link href="{{ asset('site/bootstrap.css')}}" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div>
            Você está Logado !!
        </div>
    </div>
</x-app-layout>
<script src="{{asset('site/jquery.js')}}"></script>
<script src="{{asset('site/bootstrap.js')}}"></script>