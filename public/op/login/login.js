$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

function inicio(){
  $.ajax({
    async: true,
    type: "POST",
    url: "/salida",
    data: "",
    dataType: "html",
    success: function(result)
    {
    
    }
    
    });
}
inicio();

$('#ingreso_sistema').click(function(){

  let email = $('#email_login').val().trim();
  let pass = $('#pass_login').val().trim();
  let datos = [email, pass];




  
  $.ajax({
    type: "POST",
    url: '/login_user',
    data: {datos:datos},
    beforeSend: function () {
        $('#ingreso_sistema').prop('disabled', true);
    },
    complete: function () {
        $('#ingreso_sistema').prop('disabled', false);
    },
    success: function (response) {
      
     if (response=="true"){
      window.location.href = "http://evaluacion.test/user/perfil";
     }else if (response="false"){
      new Noty({
        text: 'Usuario Incorrecto!!.',
        type: 'error'
    }).show();
     }
    },
    error: function (jqXHR) {
      new Noty({
        text: 'Algo salio mal, intenta de nuevo!!.',
        type: 'error'
    }).show();
    }
});

});