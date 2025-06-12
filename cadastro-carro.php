<?php 
require_once "CarroDAO.php";

CarroDAO::cadastrar($_GET);

echo ("<h1> deu boa </h1>");
echo ("<a href='form-cadastro-carro.php'>Aperte aqui e volte a cadastrar</a>");
