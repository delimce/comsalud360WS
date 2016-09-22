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


class AppointController extends BaseController
{


    public function sendEmail()
    {
        Mail::send('mail.test', [], function ($m) {


            $m->to("delimce@gmail.com", "luis de lima")->subject('Prueba de correo');
        });
    }

}