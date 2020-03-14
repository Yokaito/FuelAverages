<?php
require_once ('conexao.php');
$conexao = novaConexao();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $placa = $_REQUEST["placa"];
    $marca = $_REQUEST["marca"];
    $modelo = $_REQUEST["modelo"];
    $ano = $_REQUEST["ano"];
    $posto = $_REQUEST["posto"];
    $tipo = $_REQUEST["tipoCombustivel"];
    $proprietario = $_REQUEST["proprietario"];

    $sql = "INSERT INTO veiculo(placa, marca, modelo,ano,tipo_combustivel, proprietario)
            VALUES      ('$placa','$marca','$modelo','$ano','$tipo','$proprietario')";

            if ($conexao->query($sql) === TRUE) {
                header("location: ../cadastrar-veiculo.html");
            } else {
                echo "" . $sql . "<br>" . $conexao->error;
            }
}

?>