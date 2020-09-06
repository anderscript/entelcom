$(document).ready(function(){
    datos_gestion();
 

    $('#phone').keyup(function(){
        let phone = $('#phone').val();
        let correo = $('#correo').val();
        let id = $('#id').val();
        let pais = $('#pais').val();
         $.ajax({
            url: "sql/alert-lead.php",
            type: "GET",
            data: {phone, id, correo, pais},
            success: function(resultado){
                console.log(resultado);
            }
         });
    });

    $('#correo').keyup(function(){
        let phone = $('#phone').val();
        let correo = $('#correo').val();
       let id = $('#id').val();
       let pais = $('#pais').val();
        $.get("sql/alert-lead.php", {id, correo, phone, pais}, function(result){
            console.log(result);
        });
    });

    $("#pais").keyup(function(){
        let phone = $('#phone').val();
        let correo = $('#correo').val();
        let id = $('#id').val();
        let pais = $('#pais').val();
        $.ajax({
            url: "sql/alert-lead.php",
            type: "GET",
            data: {id, phone, correo, pais},
            success: function(resultado){
                console.log(resultado);
            }
        })
    });
    
    function datos_gestion(){
        let id = $('#id').val();
        $.ajax({
            url: "gestiones-datos.php",
            type: "GET",
            data: {id},
            success: function(resultado){
                $('#gestiones').html(resultado);
            }
        });
    }

   
       
         
        $('#guardar_nota').click(function(){
            
            var notas = $('#nota').val();
            var id_cliente = $('#id').val();
            var nombre_usuario = $('#nombre_usuario').val();
           
            $.ajax({
                url: "sql/insert-notas.php",
                data: {notas, id_cliente, nombre_usuario},
                type: "POST",
                success: function(resultado){
                        console.log("Se ejecuto");
                        $('#nota').val("");
                        datos_gestion();
                }
            });  
        });

            
   console.log("hola");
});