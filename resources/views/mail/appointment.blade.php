@extends('layout.mail')
{{--@section('title', 'algo')--}}
{{-- content here--}}
@section('content')

    <div style="text-align: justify; padding: 30px">

        <div style="margin: auto; width: 650px">
            <b>Estimad@ Usuario:</b> {!! $name !!} <br>

            Gracias por Utilizar nuestros Canales Electronicos <br><br>

            @foreach ($medical as $appoint)
                <div style="padding: 12px">
                   <span>Le Informamos que su cita quedo registrada el día {{date("d-m-Y")}}</span> <br>
                    <span style="font-weight: bold">Fecha de la Cita:</span>&nbsp;<span>{{$appoint["oferta_horario"]}}</span><br>
                    <span>{{$appoint["medico_nombre"]}}</span><br>
                    <span>{{$appoint["oferta_localidad"]}}</span><br>
                    <span>Estatus de la cita: <b>Por confirmar</b></span>

                </div>

            @endforeach

            <p>&nbsp;</p>

            {{--<a class="waves-effect blue-grey btn">Activar</a>--}}

        </div>


    </div>

@stop
{{-- content here--}}