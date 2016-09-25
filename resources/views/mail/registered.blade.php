@extends('layout.mail')
{{--@section('title', 'algo')--}}
{{-- content here--}}
@section('content')

    <div style="text-align: justify; padding: 30px">
        {{--
         Bienvenid@ {!! $nombre !!} ha sido creada una cuenta en el sitio, para gestión de sus avisos en línea.
         <p>Su nueva clave de acceso es: <strong>{!! $clave !!}</strong> pronto podrá visitarnos.</p>

       --}}

        <div style="margin: auto; width: 650px">
            <b>Estimad@ Usuario:</b> Nombre y Apellido <br>

            Le hacemos llegar la más cordial Bienvenida a Nuestra Plataforma <b>comsalud360App</b> tu comunidad de Salud
            al Alcance de tu mano.
            <br><br>
            Nuestra Versión demo App pone a sus disposición un recorrido sobre las funcionalidad más significativas de
            nuestra plataforma web.
            <br><br>

            Contamos desde ya con su participación!!
        </div>


    </div>

@stop
{{-- content here--}}