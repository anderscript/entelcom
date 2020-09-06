$(document).ready(function(){
    
    function datos_gestion(){
        let id = $('#id').val();
        $.ajax({
            url: "ajax/gestiones-datos.php",
            type: "GET",
            data: {id},
            success: function(resultado){
                $('#gestiones').html(resultado);
            }
        });
    }
    function datos_lead(){
        let id = $('#id').val();
        $.ajax({
            url: "ajax/datos-lead.php",
            type: "GET",
            data: {id},
            success: function(resultado){
                $('#datos').html(resultado);
            }
        });
    }

    function datos_oportunidad(){
        let id = $('#id').val();
        $.ajax({
            url: "ajax/datos-oportunidad.php",
            type: "GET",
            data: {id},
            success: function(resultado){
                $('#datos-oportunidad').html(resultado);
            }
        });
    }

    datos_gestion();
    datos_lead();
    datos_oportunidad();

    
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
                    console.log("se ejecuto");
            }
        });  
    });

    $('#guardar_oportunidad').click(function(){
        var id_cliente = $('#id').val();
        var nombre_usuario = $('#nombre_usuario').val();
        let valor = $('#valor-oportunidad').val();
        let tipo = $('#tipo-oportunidad').val();
        let fecha = $('#fecha-oportunidad').val();
        $.ajax({
            url: "sql/guardar-oportunidad.php",
            type: "POST",
            data: {nombre_usuario, id_cliente, valor, tipo, fecha},
            success: function(e){
                
                $('#valor-oportunidad').val(" ");
                
                $('#fecha-oportunidad').val(" ");
            }
        });

    });

    $('#guardar-cambios').click(function(){
        var id_cliente = $('#id').val();
        let pais = $('#pais-lead').val();
        let email = $('#email-lead').val();
        let lead = $('#nombre-lead').val();
        let telefono = $('#telefono-lead').val();
        let web = $('#web-lead').val();
        let conpania = $('#compania-lead').val();
        $.ajax({
            url: "sql/modificar-lead.php",
            type: "POST",
            data: {id_cliente, pais, email, lead, telefono, web, conpania},
            success: function(e){
                datos_lead();
            }
        });

    });

    $('#editar-oportunidad3').click(function(){
        let valor = $('#valor').val();
        let fecha = $('#fecha').val();
        console.log(fecha);
        console.log(valor);
        console.log("hola");
    });

});