<?php

class CarroDAO
{
    static function cadastrar($dados)
    {
        $conexao = ConexaoBD::conectar();
        $sql = "insert into carro (modelo, marca, ano) value (?,?,?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $dados["modelo"]);
        $stmt->bindParam(2, $dados["marca"]);
        $stmt->bindParam(3, $dados["ano"]);

.
        $stmt->execute();
    }
}
