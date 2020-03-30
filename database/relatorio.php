<?php
  include 'conn.php';
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Fabio Selau">

  <title>Abastecimentos - SuppySystem</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>
<script>
function cont(){
   var conteudo = document.getElementById('print').innerHTML;
   tela_impressao = window.open('');
   tela_impressao.document.write(conteudo);
   tela_impressao.window.print();
   tela_impressao.window.close();
}
</script>

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">


<input type="button" class="btn btn-primary" onclick="cont();" value="Imprimir">
<body id="page-top">

<div id="print" class="conteudo">

  
      <!-- Divider -->
      

      

   


          <!-- DataTables Example -->
          
              Lista de Abastecimentos
           
              
                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Veículo</th>
                      <th>Abastecimento</th>
                      <th>Data</th>
                      <th>Hora</th>
                      <th>Combustível</th>
                      <th>Preço/L</th>
                      <th>Quantidade</th>
                      <th>KM Atual</th>
                      <th>Posto</th>
                      
                      
                    </tr>
                  </thead>
                  
                



                  <?php
                      
                      $mes = $_POST['fdata'];
                      ECHO $mes;
                     $sql = "SELECT * FROM abastecimento WHERE MONTH('data') = $mes AND YEAR('data') = '$mes';";

                        $result = $conn->query($sql);
          
                      if($result->num_rows > 0){
                          while($row = $result->fetch_assoc()){
                  ?>
                  <tbody>
                    <tr>
                      <th><?php echo $row['id_veiculo'];?></th>
                      <th><?php echo $row['id_abastecimento'];?></th>
                      <th><?php echo $row['data'];?></th>
                      <th><?php echo $row['hora'];?></th>
                      <th><?php echo $row['tipo_combustivel'];?></th>
                      <th><?php echo $row['preco_litro'];?></th>
                      <th><?php echo $row['quantidade_litros_abastecidos'];?></th>
                      <th><?php echo $row['km_atual'];?></th>
                      <th><?php echo $row['nome_posto'];?></th>
                      
                    </tr>
                    <?php
	                         }
                      }
                    
	                 ?> 
                  </tbody>
                </table>
                <?php
                
               /* $id_abastecimento = $_POST['fveiculo'];
                $data = $_POST['fdata'];
                $media_consumo = $_POST[''];

            

                $mysqli->query("INSERT INTO relatorio(`id_abastecimento`, 'data', 'media_consumo') 
                VALUES ('$id_abastecimento','$data','$media_consumo');")  or die($mysqli->error());
                */
                         ?>
              
        </div>



     
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
