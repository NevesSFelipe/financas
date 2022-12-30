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


}


?>