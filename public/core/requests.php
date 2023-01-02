<?php

require_once '../../vendor/autoload.php';

use App\Contas;
$conta = new Contas;


$requisicao = $_SERVER['REQUEST_METHOD'];

if($requisicao === 'GET' && $_GET['select'] === 'integrante') {
    
    foreach($conta->montarSelectIntegrantes() as $integrante) {
        echo '<option value="' . $integrante->id_integrante . '">' . $integrante->nome . '</option>';
    }

}

if($requisicao === 'GET' && $_GET['select'] === 'categoria') {
    
    foreach($conta->montarSelectCategoria($_GET['id_integrante']) as $categoria) {
        echo '<option class="categorias" value="' . $categoria->id_categoria . '">' . $categoria->descricao . '</option>';
    }

}

if($requisicao === 'POST') {
    echo $conta->salvarMovimentacao($_POST['data_pagamento'], $_POST['integrante'], $_POST['categoria'], $_POST['valor'], $_POST['obs']);
}

if($requisicao === 'GET' && (!empty($_GET['id_integrante'])) && (!empty($_GET['data_pagamento']))) {

    foreach($conta->listarMovimentacoes($_GET['id_integrante'], $_GET['data_pagamento']) as $registros) {

        if($registros->status === 'E') {
            $somaEntradas += $registros->valor;
        }

        if($registros->status === 'S') {
            $somaSaidas += $registros->valor;
        }
        
        $iconeRegistro = $registros->status === 'E' ? '<i class="fa-solid fa-arrow-trend-up text-success"></i>' : '<i class="fa-solid fa-arrow-trend-down text-danger"></i>'; 

        $tabela .= 
            '<tr>' .
                '<th scope="row">' . date('d/m/Y', strtotime($registros->data_pagamento)) . '</th>' .
                '<td>' . $registros->descricao . '</td>' .
                '<td>R$ ' . number_format($registros->valor, 2) . '</td>' .
                '<td>' . $iconeRegistro . '</td>' .
            '</tr>'
        ;

    }

    $array_retorno = [
        'tabela' => $tabela,
        'somaEntradas' => number_format($somaEntradas, 2),
        'somaSaidas' => number_format($somaSaidas, 2),
        'diferenca' => number_format($somaEntradas - $somaSaidas, 2) 
    ];

    echo json_encode($array_retorno);

}


?>