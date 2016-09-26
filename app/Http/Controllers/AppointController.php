<?php

/**
 * Created by PhpStorm.
 * User: ldelima
 * Date: 22/9/16
 * Time: 12:13 PM
 */
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class AppointController extends BaseController
{


    public function sendEmail()
    {
        Mail::send('mail.registered', [], function ($m) {


            $m->to("delimce@gmail.com", "luis de lima")->subject('Prueba de correo');
        });
    }



    public function makeAppointment(Request $req){

        $person = $req->persona;
        $appoint = $req->solicitud;

        $request1 = array();


        /////medical request
        foreach ($appoint as $aa){
            $request1[] =  $aa["doc"];
        }


        $email = $person["email"];
        $fullName = $person["nombre"].' '.$person["apellido"];

        $data = array(
            'name' => $fullName,
            'medical' => $request1
        );


        Mail::send('mail.appointment', $data, function ($m)  use ($email,$fullName)  {

            $m->to($email, $fullName)->subject('Registro de Citas en comSalud360App');
        });




    }

}