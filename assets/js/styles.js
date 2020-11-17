$(document).ready(function() {

    $('.bee_add_producto').on('submit', bee_add_producto);

    function bee_add_producto(event){
        
        event.preventDefault();

        var form = $('.bee_add_producto'),
            hook = 'bee_hook',
            action = 'add',
            data = new FormData(form.get(0));
            data.append('hook', hook);
            data.append('action', action);

        $.ajax({
            url: 'ajax/bee_add_producto',
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            data: data,

            beforeSend: function() {

            }

        }).done(function(res) {

            if(res.status === 201){

                Swal.fire(

                    'Registro Exitoso!',
                    'Producto: '+ res.data.nombre,
                    'success'

                  );
                  document.getElementById("nombre").value = "";
                  document.getElementById("precio").value = "";

            }

        }).fail(function(err) {

            Swal.fire(

                'Error!',
                'Error al registrar el producto',
                'error'

              )

        }).always(function() {

        })
    }

});

