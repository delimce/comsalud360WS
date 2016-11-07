<?php

/**
 * Created by PhpStorm.
 * User: ldelima
 * Date: 22/9/16
 * Time: 12:13 PM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravel\Lumen\Routing\Controller as BaseController;


class AppointController extends BaseController
{


    public function sendEmail()
    {
        Mail::send('mail.registered', [], function ($m) {


            $m->to("delimce@gmail.com", "luis de lima")->subject('Prueba de correo');
        });
    }


    public function makeAppointment(Request $req)
    {

        $person = $req->persona;
        $appoint = $req->solicitud;

        $request1 = array();


        /////medical request
        foreach ($appoint as $aa) {
          //  $request1[] = $aa["doc"];
            $request1[] = $aa;
        }


        $email = $person["email"];
        $fullName = $person["nombre"] . ' ' . $person["nombre2"] . ' ' . $person["apellido"] . ' ' . $person["apellido2"];

        $data = array(
            'name' => $fullName,
            'medical' => $request1
        );


        Mail::send('mail.appointment', $data, function ($m) use ($email, $fullName) {

            $m->to($email, $fullName)->subject('Registro de Citas en ComSalud360App');
        });


    }


    public function changeStatus(Request $req)
    {


        $person = $req->persona;
        $event = $req->evento;

        $email = $person["email"];
        $fullName = $person["nombre"] . ' ' . $person["nombre2"] . ' ' . $person["apellido"] . ' ' . $person["apellido2"];

        $data = array(
            'name' => $fullName,
            'status' => ($event["estatus_id"] == 2) ? 'Confirmada' : 'Cancelada',
            'medical' => $event
        );


        Mail::send('mail.appointChange', $data, function ($m) use ($email, $fullName) {

            $m->to($email, $fullName)->subject('Actualizacion de Estatus de Cita en ComSalud360App');
        });


    }


}