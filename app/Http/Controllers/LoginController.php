<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use LDAP\Result;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    public function registrar_user()
    {
        $nombre = $_POST['datos'][0];
        $email = $_POST['datos'][1];
        $pass = $_POST['datos'][2];
        $veri_pass = $_POST['datos'][3];

        $registrar = Http::post('https://candidates-exam.herokuapp.com/api/v1/usuarios', 
        ['nombre' => $nombre,
        'email' => $email,
        'password' => $pass,
        'password_confirmation' => $veri_pass,]
    );

    return $registrar;

    }

    public function login_user()
    {
        $email = $_POST['datos'][0];
        $pass = $_POST['datos'][1];

        $login=null;
        $login = Http::post('https://candidates-exam.herokuapp.com/api/v1/auth/login', 
        ['email' => $email,
        'password' => $pass,]
    );
    $result = json_decode($login, false);
        if($result->tipo!=""){
            session(['user_evaluacion'=>$result->token]);
            session(['user_evaluacion_url'=>$result->url]);
             return "true";
        }else{
            session(['user_evaluacion'=>"blo"]);
            return "false";
        }

       
 
    

}

}