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


?>