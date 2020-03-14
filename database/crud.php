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
?>