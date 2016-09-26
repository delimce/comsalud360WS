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



    public function register(Request $req){



        $email = $req->email;
        $fullName = $req->nombre.' '.$req->nombre2.' '.$req->apellido.' '.$req->apellido2;

        $data = array(
            'name' => $fullName,
        );

        Mail::send('mail.registered', $data, function ($m)  use ($email,$fullName)  {


            $m->to($email, $fullName)->subject('Gracias por Registrarse en DemoComsalud360App');
        });



    }

}