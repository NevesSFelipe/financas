$(document).ready(function(){
    montarSelectIntegrantes();
    montarSelectCategoria();
})

function montarSelectIntegrantes()
{
    $.ajax({
        url : "core/requests.php",
        type : 'GET',
        data: {
            select: 'integrante'
        }
   })
   .done(function(msg){
        $('#integrante').append(msg);
   })
}

function montarSelectCategoria()
{
    $('#integrante').change(function(){
        $.ajax({
            url : "core/requests.php",
            type : 'GET',
            data: {
                select: 'categoria',
                id_integrante:  $('#integrante').val()
            }
       })
       .done(function(msg){
            $('.categorias').remove();
            $('#categoria').append(msg);
       })
    })
}