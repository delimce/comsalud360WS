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

class RegisterController extends BaseController
{


    public function sendEmail()
    {
        Mail::send('mail.test', [], function ($m) {


            $m->to("delimce@gmail.com", "luis de lima")->subject('Prueba de correo');
        });
    }


    public function register(Request $req){



        $email = $req->email;
        $fullName = $req->nombre.' '.$req->apellido;

        $data = array(
            'name' => $fullName,
        );

        Mail::send('mail.registered', $data, function ($m)  use ($email,$fullName)  {


            $m->to($email, $fullName)->subject('Gracias por Registrarse en Comsalud360');
        });

    }

}