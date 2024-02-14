$(buscar_datos());

function buscar_datos(consulta){
    $.ajax({
        url:'../App/buscarusUario.php',
        type:'POST',
        dataType:'html',
        data: {consulta: consulta},
    })

    .done(function(respuestas){
        $("#datos").html(respuestas);
    })
    .fail(function(){
        console.log("Error");
    })
}


$(document).on('keyup', '#caja_busqueda', function(){
    var valor=$(this).val();

    if(valor!= ""){
        buscar_datos(valor);
    }else{
        buscar_datos();
    }
});