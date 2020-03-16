<?php
  include 'database/crud.php';
  require_once ('database/crud.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Irineu">

  <title>Cadastrar Veículo - SuppySystem</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="recursos/css/estilo.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
  <script type="text/javascript">
       $(document).ready(function($){
       $("#inputVeiculoPlaca").mask("aaa-9999");
  });
</script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3">SuppySystem</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVeiculos" aria-expanded="true" aria-controls="collapseVeiculos">
          <i class="fas fa-fw fa-car"></i>
          <span>Abastecimentos</span>
        </a>
        <div id="collapseVeiculos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cadastrar-abastecimento.php">Criar</a>
            <a class="collapse-item" href="abastecimentos.php">Listar</a>
          </div>
        </div>
      </li>


      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVeiculos" aria-expanded="true" aria-controls="collapseVeiculos">
          <i class="fas fa-fw fa-car"></i>
          <span>Veículos</span>
        </a>
        <div id="collapseVeiculos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cadastrar-veiculo.php">Criar</a>
            <a class="collapse-item" href="veiculos.php">Listar</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
    <!--  <hr class="sidebar-divider"> -->
      

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Relatórios</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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

        <div id="content-wrapper">

          <div class="container-fluid">
  <form name="form" data-toggle="validator" role="form" method="POST" action="database/crud.php">    <div class="form-group">
       <input type="hidden" name="id" value= "<?php echo $id;?>">
        <label for="inputVeiculoPlaca">Placa</label>
        <input type="text" class="form-control" id="inputVeiculoPlaca" name="inputVeiculoPlaca" aria-describedby="emailHelp" placeholder="Digite a placa do carro"  value= "<?php echo $placa;?>">
      </div>
      <div class="form-group">
        <label for="inputVeiculoMarca">Marca</label>
        <input type="text" class="form-control" id="inputVeiculoMarca" name="inputVeiculoMarca" aria-describedby="emailHelp" placeholder="Digite a marca do carro" value= "<?php echo $marca;?>">
      </div>
      <div class="form-group">
        <label for="inputVeiculoModelo">Modelo</label>
        <input type="text" class="form-control" id="inputVeiculoModelo" name="inputVeiculoModelo"  aria-describedby="emailHelp" placeholder="Digite o modelo do carro" value= "<?php echo $modelo;?>">
      </div>
      <div class="form-group">
        <label for="inputVeiculoAno">Ano</label>
        <input type="number" class="form-control" id="inputVeiculoAno" name="inputVeiculoAno"  aria-describedby="emailHelp" placeholder="Digite o ano do carro" value= "<?php echo $ano;?>">
      </div>
      <div class="form-group">
        <label for="inputVeiculoProprietario">Proprietario</label>
        <input type="text" class="form-control" id="inputVeiculoProprietario"  name="inputVeiculoProprietario"  value= "<?php echo $proprietario;?>"  aria-describedby="emailHelp" placeholder="Digite o proprietario do carro">
      </div>
      <div class="form-group"> 
                        <label for="tipoCombustivel" >Tipo Combustível</label>
                        <select class="form-control" name="tipoCombustivel"id="tipoCombustivel" value= "<?php echo $combustivel;?>">
                          <option name="Gasolina" value="Gasolina">Gasolina</option>
                          <option name="Diesel" value="Diesel">Diesel</option>
                          <option name="Alcool" value="Álcool">Álcool</option>
                        </select>
                      </div>
                      <?php if($atualizar == true) :  ?>
                 <button type="submit" name="atualizarveiculo" class="btn btn-primary">Atualizar</button>
                   <?php else:  ?>
                 <button type="submit" name="salvarveiculo" class="btn btn-primary">Cadastrar</button>   
                   <?php endif;  ?>
    </form>
  
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>
