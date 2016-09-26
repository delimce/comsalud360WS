@extends('layout.mail')
{{--@section('title', 'algo')--}}
{{-- content here--}}
@section('content')

    <div style="text-align: justify; padding: 30px">

        <div style="margin: auto; width: 650px">
            <b>Estimad@ Usuario:</b> {!! $name !!} <br>

            Gracias por Utilizar nuestros Canales Electronicos <br>
            Le Informamos que su cita cambio de Estatus quedo actualizado el día {{date("d-m-Y")}}<br>

            <div style="padding: 12px">
                <span style="font-weight: bold">Fecha de la Cita:</span>&nbsp;<span>{{$medical["fecha"]}}</span><br>
                <span>{{$medical["pds"]}}</span><br>
                <span>{{$medical["localidad"]}}</span><br>
                <span>Estatus de la cita: <b>{!! $status !!}</b></span>

            </div>

            <p>&nbsp;</p>

            {{--<a class="waves-effect blue-grey btn">Activar</a>--}}

        </div>


    </div>

@stop
{{-- content here--}}