<?php
require_once ('conexao.php');
$conexao = novaConexao();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_veiculo = $_REQUEST["id_veiculo"]
    $data = $_REQUEST["data"];
    $hora = $_REQUEST["hora"];
    $tipo_combustivel = $_REQUEST["tipoCombustivel"];  //-------------------------------
    $preco_litro = $_REQUEST["preco_litro"];
    $litros_abastecidos = $_REQUEST["litros_abastecidos"];
    $km_atual = $_REQUEST["km_atual"];
    $nome_posto = $_REQUEST["nome_posto"]; //-------------------------------

    $sql = "INSERT INTO abastecimento(id_veiculo, data, hora, tipo_combustivel, preco_litro, quantidade_litros_abastecidos, km_atual, nome_posto)
            VALUES      ('$id_veiculo','$data','$hora','$tipo_combustivel','$preco_litro','$litros_abastecidos','$km_atual', '$nome_posto')";

            if ($conexao->query($sql) === TRUE) {
                header("location: ../cadastrar-abastecimento.html");
            } else {
                echo "" . $sql . "<br>" . $conexao->error;
            }
}
?>