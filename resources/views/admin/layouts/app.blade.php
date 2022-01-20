<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }} </title>
    <link href="{{ url('css/app.css')}}" rel="stylesheet">
    <link href="{{ url('css/index.css')}}" rel="stylesheet">
</head>

<body>

    <div class="container">
        @yield('content')








    </div>



</body>

</html>