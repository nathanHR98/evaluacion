$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });


$('#registrar_usuario').click(function(){

    let nombre = $('#nom_reg').val().trim();
    let email = $('#email_reg').val().trim();
    let pass = $('#pass_reg').val().trim();
    let veri_pass = $('#veri_pass_reg').val().trim();
    let datos = [nombre,email,pass,veri_pass];

    if (nombre=="" || email=="" || pass=="" || veri_pass==""){
      new Noty({
        text: 'Tienes que llenar todos los campos!!.',
        type: 'error'
    }).show();
    }else if (pass != veri_pass){
      new Noty({
        text: 'Contraseñas no coinciden!!.',
        type: 'error'
    }).show();

   
    }else if (pass.length<8){
      new Noty({
        text: 'Contraseña muy corta, intenta de nuevo!!.',
        type: 'error'
    }).show();
    }else{
      $.ajax({
        async: true,
        type: "POST",
        url: "/registrar_user",
        data: {datos:datos},
        dataType: "html",
        success: function(result)
        {
         
         let result2 = JSON.parse(result);
         if (result2['estado']=="true"){
          new Noty({
            text: 'Registrado con exito!!.',
            type: 'success'
        }).show();
        $('#nom_reg').val("");
        $('#email_reg').val("");
        $('#pass_reg').val("");
        $('#veri_pass_reg').val("");
       
         }else{
          new Noty({
            text: 'Algo salio mal, intenta de nuevo!!.',
            type: 'error'
        }).show();
         }
    
        }
        
        });
    }


    




});