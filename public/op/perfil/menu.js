$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  window.onload = function () {
    perfil_usuario();
    verpdf();
    user();
  }

function user(){
  $.ajax({
    async: true,
    type: "POST",
    url: "/user_ingresado",
    data: "",
    dataType: "html",
    success: function(result)
    {
      
      if (result=="fallido"){
        window.location.href = "http://evaluacion.test/login";
      }
    
    }
    
    });
}


  function perfil_usuario(){

    $.ajax({
        async: true,
        type: "POST",
        url: "/session_user",
        data: {solicitud:"true"},
        dataType: "html",
        success: function(result)
        {
            let result2 = JSON.parse(result);
            $('#nom_user').html(result2['nombre']);
            $('#text_bienvenida').html("Bienvenido!! "+result2['nombre']);
            $('#text_email').html("--Email: "+result2['email'])

            
        
        }
        
        });

  }

  function verpdf(){
    $.ajax({
        async: true,
        type: "POST",
        url: "/ver_archivo",
        data: {solicitud:"true"},
        dataType: "html",
        success: function(result)
        {
            let result2 = JSON.parse(result);
            $('#ver_archivo').attr('href', result2['url']);
        
        }
        
        });
  }

