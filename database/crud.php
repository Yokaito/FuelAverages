<?php
include 'conn.php';
$id = '';
$placa = '';
$marca = '';
$modelo = '';
$ano = '';
$combustivel = '';
$proprietario = '';
$id_veiculo = '';
$data = '';
$hora = '';
$tipo_combustivel = '';
$preco_litro = '';
$litros_abastecidos = '';
$km_atual = '';
$nome_posto = '';

//inserir
    $mysqli = new mysqli($server,$user,$pass,$bd) or die (mysqli_error($mysqli));
    if(isset($_POST['salvarveiculo'])){
        $placa = $_POST['inputVeiculoPlaca'];
        $marca = $_POST['inputVeiculoMarca'];
        $modelo = $_POST['inputVeiculoModelo'];
        $ano = $_POST['inputVeiculoAno'];
        $combustivel = $_POST['tipoCombustivel'];
        $proprietario = $_POST['inputVeiculoProprietario'];
        
        $mysqli->query("INSERT INTO veiculo(placa,marca,modelo,ano,tipo_combustivel, proprietario) 
        VALUES('$placa','$marca','$modelo',$ano,'$combustivel','$proprietario') ")  or die($mysqli->error());
         
        header("location:../veiculos.php");
    }

    if(isset($_POST['salvarabastecimento'])){
        $id_veiculo = $_POST['fsetor'];
        $data = $_POST['inputAbastecimentoData'];
        $hora = $_POST['inputAbastecimentoHora'];
        $tipo_combustivel = $_POST['tipoCombustivel'];
        $preco_litro = $_POST['inputAbastecimentoPrecoLitro'];
        $litros_abastecidos = $_POST['inputAbastecimentoLitrosAbastecidos'];
        $km_atual = $_POST['inputAbastecimentoKMAtual'];
        $nome_posto = $_POST['nome_posto'];

        $mysqli->query("INSERT INTO abastecimento(id_veiculo,`data`, hora, tipo_combustivel, preco_litro, quantidade_litros_abastecidos, km_atual, nome_posto) 
        VALUES ($id_veiculo,'$data','$hora','$tipo_combustivel',$preco_litro,$litros_abastecidos,$km_atual,'$nome_posto');")  or die($mysqli->error());
        header("location:../abastecimentos.php");
    }

//deletar
    if(isset($_GET['deletarveiculo'])){
        $id = $_GET['deletarveiculo'];
        $mysqli->query("DELETE FROM veiculo WHERE id_veiculo=$id") or die($mysqli->error());
        header("location:../veiculos.php");
    } 

    if(isset($_GET['deletarabastecimento'])){
        $id = $_GET['deletarabastecimento'];
        $mysqli->query("DELETE FROM abastecimento WHERE id_abastecimento=$id") or die($mysqli->error());
        header("location:../abastecimentos.php");
    } 
    $id_veiculo = 0;
    $id_abastecimento = 0;
    $atualizar = false;
    
//editar
    if(isset($_GET['editarveiculo'])){
        $id = $_GET['editarveiculo'];
        $atualizar = true;
        $result = $mysqli->query("SELECT * FROM veiculo WHERE id_veiculo=$id") ;
        if (isset($result)==1){
            $row = $result->fetch_array();
            $placa = $row['placa'];
            $marca = $row['marca'];
            $modelo = $row['modelo'];
            $ano = $row['ano'];
            $combustivel = $row['tipo_combustivel'];
            $proprietario = $row['proprietario'];
            
        } 
    } 
    if(isset($_GET['editarabastecimento'])){
        $id = $_GET['editarabastecimento'];
        $atualizar = true;
        $result = $mysqli->query("SELECT * FROM abastecimento WHERE id_abastecimento=$id") ;
        if (isset($result)==1){
            $row = $result->fetch_array();
            $id_veiculo = $row['id_veiculo'];
            $data = $row['data'];
            $hora = $row['hora'];
            $tipo_combustivel = $row['tipo_combustivel'];
            $preco_litro = $row['preco_litro'];
            $litros_abastecidos = $row['quantidade_litros_abastecidos'];
            $km_atual = $row['km_atual'];
            $nome_posto = $row['nome_posto'];
            
        } 
    }
  //atualizar  
    if(isset($_POST['atualizarveiculo'])){
        $id = $_POST['id'];
        $placa = $_POST['inputVeiculoPlaca'];
        $marca = $_POST['inputVeiculoMarca'];
        $modelo = $_POST['inputVeiculoModelo'];
        $ano = $_POST['inputVeiculoAno'];
        $combustivel = $_POST['tipoCombustivel'];
        $proprietario = $_POST['inputVeiculoProprietario'];
        
        $mysqly = ("UPDATE veiculo 
        SET placa = '$placa', marca ='$marca', modelo='$modelo', ano='$ano',tipo_combustivel='$combustivel', proprietario='$proprietario'
         WHERE id_veiculo =$id") or die($mysqli->error());
        if ($conn->query($mysqly) === TRUE) {
            echo "Alterado com sucesso.";
        } else {
            echo "Error: " . $mysqly . "<br>" . $conn->error;
        }
        header("location:../veiculos.php");
      
    } 

    if(isset($_POST['atualizarabastecimento'])){
        $id = $_POST['id'];
        
        $id_veiculo = $_POST['fsetor'];
        $data = $_POST['inputAbastecimentoData'];
        $hora = $_POST['inputAbastecimentoHora'];
        $tipo_combustivel = $_POST['tipoCombustivel'];
        $preco_litro = $_POST['inputAbastecimentoPrecoLitro'];
        $litros_abastecidos = $_POST['inputAbastecimentoLitrosAbastecidos'];
        $km_atual = $_POST['inputAbastecimentoKMAtual'];
        $nome_posto = $_POST['nome_posto'];
       

        $mysqly = ("UPDATE abastecimento 
        SET id_veiculo = '$id_veiculo', data ='$data', hora='$hora', tipo_combustivel='$tipo_combustivel', preco_litro='$preco_litro',
         quantidade_litros_abastecidos ='$litros_abastecidos', km_atual ='$km_atual', nome_posto = '$nome_posto'
         WHERE id_abastecimento =$id") or die($mysqli->error());
        if ($conn->query($mysqly) === TRUE) {
            echo "Alterado com sucesso.";
        } else {
            echo "Error: " . $mysqly . "<br>" . $conn->error;
        }
        header("location:../abastecimentos.php");
        var_dump ($tipo_combustivel);
    } 
  

?>