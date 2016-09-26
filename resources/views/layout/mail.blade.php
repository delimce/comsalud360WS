<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    {!! Html::style('css/materialize.min.css') !!}

</head>
<body style="padding-top: 20px">

<div style="text-align: center; ">
    {!! HTML::image('img/logo-comsalud-welcome1.png') !!}
    <br>
    <span style="font-size: 25px; color: darkblue">
        ¡Bienvenido a Comsalud 360 App!
    </span>
</div>


<h2>@yield('title')</h2>

@yield('content')


<div style="text-align:center;padding-top: 30px; font-size: 10px; color: darkgray">
    Este es un correo automatizado. Si recibiste este correo por error, no es necesario que hagas nada.
</div>

{!! Html::script('js/materialize.min.js') !!}
</body>
</html>