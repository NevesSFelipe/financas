<?php

namespace App;

use App\Banco;
use PDO;

class Contas {

    private Banco $banco;

    public function __construct()
    {
        $this->banco = new Banco();
    }

    public function montarSelectIntegrantes()
    {
        return $this->banco->buscar('integrantes')->fetchAll(PDO::FETCH_CLASS);
    }

    public function montarSelectCategoria(string $id_integrante)
    {
        $nome_tabela = 'categorias_integrantes as ci';
        $innerJoin = 'categorias as c ON c.id_categoria = ci.id_categoria';
        $where = "id_integrante = $id_integrante";
        $campos = 'c.id_categoria, c.descricao';
        
        return $this->banco->buscar($nome_tabela, $innerJoin, $where, null, null, $campos)->fetchAll(PDO::FETCH_CLASS);
    }

    public function salvarMovimentacao(string $data_pagamento, int $id_integrante, int $id_categoria, float $valor, string $obs)
    {
        $array_valores = [
            'data_pagamento' => $data_pagamento,
            'id_integrante' => $id_integrante,
            'id_categoria' => $id_categoria,
            'valor' => $valor,
            'obs' => $obs
        ];

        return $this->banco->inserir('movimentacoes', $array_valores);
    }

    public function listarMovimentacoes(string $integrante, string $data_pagamento)
    {

        $nome_tabela = 'integrantes';
        $where = "nome = '$integrante'";
        $integrantes = $this->banco->buscar($nome_tabela, null, $where, null, null, 'id_integrante')->fetchAll(PDO::FETCH_CLASS);

        foreach($integrantes as $integrante) {
            $id_integrante = $integrante->id_integrante;
        }

        $data = explode('&', $data_pagamento);
        $data_inicial = $data[0];
        $data_final = $data[1];

        $nome_tabela = 'movimentacoes mv';
        $innerJoin = 'categorias ct ON ct.id_categoria = mv.id_categoria';
        $where = "id_integrante = $id_integrante AND data_pagamento BETWEEN '$data_inicial' AND '$data_final'";
        $campos = 'mv.data_pagamento, ct.descricao, mv.valor, ct.status';

        return $this->banco->buscar($nome_tabela, $innerJoin, $where, null, null, $campos)->fetchAll(PDO::FETCH_CLASS);
    }


}


?>