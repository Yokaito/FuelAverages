<?php
  include 'conn.php';
?>
<!DOCTYPE html>
  <html lang="pt-br">

  <head>
  <div class="form-row">
  <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
<input type="button" class="btn btn-primary" onclick="cont();" value="Imprimir">
  </div>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Irineu">

    <title>Gerar Relatório - SuppySystem</title>
    <div id="print" class="conteudo">
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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



  <body id="page-top">

   

       

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">1</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">
                    Notificações
                  </h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">11 de março de 2020</div>
                      <span class="font-weight-bold">Versão Beta do SuppySystem</span>
                    </div>
                  </a>
                  
                  <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar Tudo</a>
                </div>
              </li>



              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                  <img class="img-profile rounded-circle" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=60&q=60">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Perfil
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Sair
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->


<body id="page-top">

<div id="print" class="conteudo">

  
      <!-- Divider -->
      
          <!-- DataTables Example -->
      
           
              <div class="form-row">
                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Veículo</th>
                      <th>Abastecimento</th>
                      <th>Data</th>
                     
                      <th>Quantidade</th>
                      <th>KM Atual</th>
                      <th>Média por Litro</th>
                     
                      
                      
                    </tr>
                  </thead>
                  
                



                  <?php
                      
                      $carro = $_POST['fcarro'];
                      $data_ini = $_POST['data1'];
                      $data_fim = $_POST['data2'];
                  
                      
                      $sql = "SELECT * , (km_atual DIV quantidade_litros_abastecidos) as Media FROM abastecimento WHERE id_veiculo = $carro AND data 
                      between '$data_ini' and '$data_fim'";
                      
                        $result = $conn->query($sql);
          
                      if($result->num_rows > 0){
                          while($row = $result->fetch_assoc()){
                            
                  ?>
                  <tbody>
                    <tr>
                      <th><?php echo $row['id_veiculo'];?></th>
                      <th><?php echo $row['id_abastecimento'];?></th>
                      <th><?php echo $row['data'];?></th>
                      
                      <th><?php echo $row['quantidade_litros_abastecidos'];?></th>
                      <th><?php echo $row['km_atual'];?></th>
                      <th><?php echo $row['Media'];?></th>

                      
                      
                    </tr>
                    <?php
	                         }
                      }
                    
	                 ?> 
                  </tbody>
                </table>
               
              
        </div> </div>




        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; SuppySystem 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


  </body>

  </html>