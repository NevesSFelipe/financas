$(document).ready(function(){
    montarSelectIntegrantes();
    montarSelectCategoria();
    salvarMovimentacao();
    salvarIntegrante();
    recuperarIntegrante();
    salvarMes();
    recuperarIntegranteMes();
    listarRegistros();
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

function salvarIntegrante()
{
    $('#btn_acessar_casa').click(function(){

        var integrante_casa = $('#integrante_casa').val();
        localStorage.setItem('integrante', integrante_casa);
        window.location.href = 'calendario.php';

    });

    $('#btn_acessar_felipe').click(function(){

        var integrante_felipe = $('#integrante_felipe').val();
        localStorage.setItem('integrante', integrante_felipe);
        window.location.href = 'calendario.php';

    });

    $('#btn_acessar_geraldo').click(function(){

        var integrante_geraldo = $('#integrante_geraldo').val();
        localStorage.setItem('integrante', integrante_geraldo);
        window.location.href = 'calendario.php';

    });

}

function recuperarIntegrante()
{
    var integrante = localStorage.getItem('integrante');
    $('#nome-integrante').text(integrante);
}

function salvarMes()
{
    $('#btn_janeiro').click(function(){

        var mes = $('#janeiro').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_fevereiro').click(function(){

        var mes = $('#fevereiro').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_marco').click(function(){

        var mes = $('#marco').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_abril').click(function(){

        var mes = $('#abril').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_maio').click(function(){

        var mes = $('#maio').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_junho').click(function(){

        var mes = $('#junho').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_julho').click(function(){

        var mes = $('#julho').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_agosto').click(function(){

        var mes = $('#agosto').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_setembro').click(function(){

        var mes = $('#setembro').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_outubro').click(function(){

        var mes = $('#outubro').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_novembro').click(function(){

        var mes = $('#novembro').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });

    $('#btn_dezembro').click(function(){

        var mes = $('#dezembro').val();
        localStorage.setItem('mes', mes);
        window.location.href = 'relatorio.php';

    });
}

function recuperarIntegranteMes()
{
    var integrante = localStorage.getItem('integrante');
    var mes = localStorage.getItem('mes');
    
    $('#nome-integrante').text(integrante);
    $('#mes').text(mes);
}

function listarRegistros()
{
    $.ajax({
        url : "core/requests.php",
        type : 'GET',
        dataType: 'json',
        data: {
            id_integrante: localStorage.getItem('integrante'),
            data_pagamento: pegarDataFiltro(localStorage.getItem('mes'))
        }
   })
   .done(function(msg){
        $('#corpo-tabela').append(msg['tabela']);
        $('#soma-entradas').text('R$ ' + msg['somaEntradas']);
        $('#soma-saidas').text('R$ ' + msg['somaSaidas']);
        $('#diferenca').text('R$ ' + msg['diferenca']);
   })
}

function pegarDataFiltro(mes)
{
    switch(mes) {
 
        case 'Janeiro':
            return '2023-01-01&2023-01-31'
 
        case 'Fevereiro':
            return '2023-02-01&2023-02-28'
        
        case 'Março':
            return '2023-03-01&2023-03-31'
        
        case 'Abril':
            return '2023-04-01&2023-04-30'
        
        case 'Maio':
            return '2023-05-01&2023-05-31'
        
        case 'Junho':
            return '2023-06-01&2023-06-30'
        
        case 'Julho':
            return '2023-07-01&2023-07-31'
        
        case 'Agosto':
            return '2023-08-01&2023-08-31'
        
        case 'Setembro':
            return '2023-09-01&2023-09-30'
        
        case 'Outubro':
            return '2023-10-01&2023-10-31'

        case 'Novembro':
            return '2023-11-01&2023-11-30'

        case 'Dezembro':
            return '2023-12-01&2023-12-31'
    }
}