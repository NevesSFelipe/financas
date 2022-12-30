<?php

namespace App;

use mysqli;
use PDO;
use PDOException;

class Banco {

    const SERVIDOR = 'localhost';
    const USUARIO = 'felipeneves';
    const SENHA = 'qwe@123';
    const BANCO = 'financas';

    private $conexao;

    public function __construct()
    {
        try{
            $this->conexao = new PDO('mysql:host=' . self::SERVIDOR . ';dbname=' . self::BANCO, self::USUARIO, self::SENHA);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            die('ERRO: ' . $e->getMessage());
        }
    }

    public function buscar(string $nome_tabela, string $innerJoin = null, string $where = null, string $order = null, string $limit = null, string $campos = '*')
    {
        $innerJoin = strlen($innerJoin) ? "INNER JOIN $innerJoin" : '';
        $where = strlen($where) ? "WHERE $where" : '';
        $order = strlen($order) ? "ORDER BY $order" : '';
        $limit = strlen($limit) ? "LIMIT $limit" : '';
        $sql = "SELECT $campos FROM $nome_tabela $innerJoin $where $order $limit";

        return $this->executarQuery($sql);
    }

    private function executarQuery(string $sql, array $parametros = [])
    {
        try{
            $statement = $this->conexao->prepare($sql);
            $statement->execute($parametros);
            return $statement;
        } catch(PDOException $e){
            die('ERRO: ' . $e->getMessage());
        }
    }



}

?>