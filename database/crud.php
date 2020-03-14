<?php
	function insertVeiculo($placa,$marca,$modelo,$ano,$combustivel,$proprietario){
			include 'conn.php';
			
			$sql = "insert into veiculo(placa,marca,modelo,ano,tipo_combustivel, proprietario) values('$placa','$marca','$modelo',$ano,'$combustivel','$proprietario');";

            if ($conn->query($sql) === TRUE) {
                echo "Novo registro cadastrado.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }
    
    function insertAbastecimento($id_veiculo,$data,$hora,$tipo_combustivel,$preco_litro,$litros_abastecidos,$km_atual,$nome_posto){
            include 'conn.php';

            $sql = "INSERT INTO abastecimento(id_veiculo,`data`, hora, tipo_combustivel, preco_litro, quantidade_litros_abastecidos, km_atual, nome_posto) 
            VALUES ($id_veiculo,'$data','$hora','$tipo_combustivel',$preco_litro,$litros_abastecidos,$km_atual,'$nome_posto');";

            if ($conn->query($sql) === TRUE) {
                echo "Novo registro cadastrado.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }
?>