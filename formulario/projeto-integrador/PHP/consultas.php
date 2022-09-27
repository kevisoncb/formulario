<?php
//script de conexao
require_once ('conexao.php');

//busca dos dados

$sql = "SELECT * FROM produtos";
$result = $conn->query ($sql);
    while($dados = $result->fetch_array()){
        echo $dados[Nome];
        echo $dados[Telefone];
        echo $dados[Email];
        echo $dados[Mensagem];
    }

?>      