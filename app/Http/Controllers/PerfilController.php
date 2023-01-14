<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PerfilController extends Controller
{


    public function user_ingresado()
    {
        $sesion = session('user_evaluacion');
        if ($sesion=="" || $sesion==null || $sesion=="blo"){
            return "fallido";
        }else{
            return "exitoso";
        }
    }

    public function session_user()
    {
        $solicitud = $_POST['solicitud'];

        if ($solicitud=="true"){
            $sesion = session('user_evaluacion');
            
            $response = Http::withHeaders([
            'Authorization' => $sesion,
        ])->get('https://candidates-exam.herokuapp.com/api/v1/usuarios', [
            
        ]);
        
       return $response;
    }
    }
    public function envio_archivo()
    {
      
        $archivo = $_FILES['access_img'];
       

        if (filesize($archivo["tmp_name"])>5000000){
            return 'fallido';
        } else if($archivo['type']=='application/pdf'){

            $sesion = session('user_evaluacion'); $url = session('user_evaluacion_url');

            $response = Http::withHeaders([
                'Authorization' => $sesion,
            ])->attach( 
                'curriculum', file_get_contents($archivo["tmp_name"]), $archivo["name"],
            )->post('https://candidates-exam.herokuapp.com/api/v1/usuarios/'.$url.'/cargar_cv');

                return $response;

        }else if($archivo['type']!='application/pdf'){
            return 'fallido';
        }   
  
}

public function ver_archivo()
{

    $solicitud = $_POST['solicitud'];

    if($solicitud=="true"){
        $sesion = session('user_evaluacion');
        $response = Http::withHeaders([
            'Authorization' => $sesion,
        ])->get('https://candidates-exam.herokuapp.com/api/v1/usuarios/mostrar_cv', [
            
        ]);
        return $response;
    }

   
}

}