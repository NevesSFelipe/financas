$(document).ready(function(){
    montarSelectIntegrantes();
    montarSelectCategoria();
    salvarMovimentacao();
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

function salvarMovimentacao()
{
    $('#btn-salvar').click(function(){

        data_pagamento = $('#data_pagamento').val();
        integrante = $('#integrante').val();
        categoria = $('#categoria').val();
        valor = $('#valor').val();
        obs = $('#obs').val();

        $('#alerta').remove();

        if((!data_pagamento) || (!integrante) || (!categoria) || (!valor)) {
                        
            $('#msg').append(
                '<div id="alerta" class="alert alert-warning mt-2 text-center" role="alert">' +
                    'Por favor, preencha todos os campos com "*"' +
                '</div>'
            );

            return;
        }

        $.ajax({
            url : "core/requests.php",
            type : 'POST',
            data: {
                data_pagamento: data_pagamento, 
                integrante: integrante, 
                categoria: categoria, 
                valor: valor,
                obs:  obs
            }
       })
       .done(function(msg){

            if(msg) {
                $('#msg').append(
                    '<div id="alerta" class="alert alert-success mt-2 text-center" role="alert">' +
                        'Movimentação registrada com sucesso' +
                    '</div>'
                );
            }
       });

    });

}