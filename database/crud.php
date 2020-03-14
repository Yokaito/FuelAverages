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

    function selectVeiculo(){
        include 'conn.php';

        ?>
            <table>
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>NOME</th>
                      <th>SALARIO</th>
                      <th>CODSETOR</th>
                  </tr>
                </thead>
                <?php
                  $sql = "select * from veiculo;";
    
                  $result = $conn->query($sql);
    
                  if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['nome'];?></td>
                    <td><?php echo $row['salario'];?></td>
                    <td><?php echo $row['codsetor'];?></td> 
                  </tr>
                  <?php
                      }
                  }
                  ?>
                </tbody>
            </table>
            <?php
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