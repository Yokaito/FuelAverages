<?php
	function insertVeiculo($placa,$marca,$modelo,$ano,$posto,$combustivel){
			include 'conn.php';
			
			$sql = "insert into veiculo(placa,marca,modelo,ano,tipo_combustivel, proprietario) values('$placa','$marca','$modelo',$ano,'$posto','$combustivel');";

            if ($conn->query($sql) === TRUE) {
                echo "Novo registro cadastrado.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
	}
	?>