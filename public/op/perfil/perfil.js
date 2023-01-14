$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  

$('#enviar_archivo').click(function(){

    const file = $('#archivo').prop("files")[0];
    const formData = new FormData();
    formData.append('access_img', file);


    
    $.ajax({
        method: 'post',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        enctype: 'multipart/form-data',
        url: '/envio_archivo',
        success: function (response) {
          
            if (response=="fallido"){
                new Noty({
                    text: 'Archivo incorrecto o demasiado pesado!!.',
                    type: 'error'
                }).show();
            }else{
                new Noty({
                    text: 'Archivo ingresado con exito!!.',
                    type: 'success'
                }).show();
                $.ajax({
                    async: true,
                    type: "POST",
                    url: "/ver_archivo",
                    data: {solicitud:"true"},
                    dataType: "html",
                    success: function(result)
                    {
                        $("ver_archivo").removeAttr("href");
                        let result2 = JSON.parse(result);
                        $('#ver_archivo').attr('href', result2['url']);
                    
                    }
                    
                    });
            }

        }
    });

});

