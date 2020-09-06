$(document).ready(function(){
    $('#btn-publicar').click(function(){
        let titulo =$('#titulo').val();
        let contenido = $('#contenido').val();
        $.ajax({
            url: "ajax/post.php",
            type: 'POST',
            data: {titulo, contenido},
            success: function(resultado){
                $('#titulo').val("");
                $('#contenido').val("");
                $('#alert').html(resultado);
            }
        })
    });

    $('#btn-editar').click(function(){
        let titulo =$('#titulo').val();
        let id =$('#id').val();
        let contenido = $('#contenido').val();
        $.ajax({
            url: "ajax/editar-post.php",
            type: 'POST',
            data: {titulo, contenido, id},
            success: function(resultado){
                $('#alert').html(resultado);   
            }
        })
    });
});