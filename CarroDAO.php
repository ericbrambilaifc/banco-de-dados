<?php

class CarroDAO
{
    static function cadastrar($dados)
    {
        $conexao = ConexaoBD::conectar();
        $sql = "insert into carro (modelo, marca, ano) value (?,?,?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $dados[]);
        $stmt->bindParam(2, $dados[]);
        $stmt->bindParam(3, $dados[]);


        $stmt->execute();
    }
}
