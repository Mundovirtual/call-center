 
    
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="description" content=""> 
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="robots" content="all,follow">
    <!--===============================================================================================--> 
    <link rel="shortcut icon" href="../images/icons/favicon.ico">
    <!--===============================================================================================--> 
    <!--===============================================================================================--> 
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--===============================================================================================--> 

    <!--===============================================================================================-->      
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="../js/malihu/jquery.mCustomScrollbar.css">
    <!--===============================================================================================--> 

    <!--===============================================================================================--> 
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!--===============================================================================================--> 
    
    <!--===============================================================================================--> 
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" type="text/css" href="../fonts/css/fontawesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="../fonts/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="../fonts/css/brands.css">
    <link rel="stylesheet" type="text/css" href="../fonts/css/solid.css"> 
     <!--===============================================================================================--> 

    <!--===============================================================================================--> 
    <!-- Popper js--> 
    <script src="../js/popper/popper.min.js"   crossorigin="anonymous"></script>    
    <!--===============================================================================================--> 

    <!--===============================================================================================--> 
    <!-- Alertyfy js-->
    <link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/alertify.css">

    <!--===============================================================================================--> 
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <script src="../js/jquery/jquery.min.js"></script>
    <!--===============================================================================================--> 

    <!--===============================================================================================--> 
    <!-- Data tables-->    
    <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css">
    <script type="text/javascript" src="../js/DataTables/datatables.js"></script>
    <!--===============================================================================================--> 


    <!--====================================DASBOARD======================================-->
    <link rel="stylesheet" href="../css/dasboard.css">
    <!--===============================================================================================--> 
  </head>


  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><div class="fas fa-user-tie fa-4x"></div>
          <div> 
            <span>
              <h3>Administrador</h3>
            </span>
          </div>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>SM</strong><strong class="text-primary">S</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>

          <ul id="side-main-menu" class="side-menu list-unstyled">                  
          
            <li><a href="../view/index.php?cargar=10" aria-expanded="false"> 
                <i class="fas fa-tachometer-alt"></i>Estado del Concurso </a>
            </li>                  
            <li>
                <a href="../view/index.php?cargar=11" aria-expanded="false"> 
                  <i class="fas fa-phone"></i>Registros</a>
            </li>
        
            <li>
              <a href="../view/index.php?cargar=5" aria-expanded="false"> 
                <i class="fas fa-comment-smile"></i>
              Enviar SMS</a>
            </li> 
          </ul>
        </div>
         
      </div>
    </nav>



    <div class="page ">
      <!-- navbar-->
      <header class="header sticky-top">
        <nav class="navbar">
          <div class="container-fluid ">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header">
                <a id="toggle-btn" href="#" class="menu-btn">
                  <i class="fas fa-bars"></i>
                </a>
                   
                
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">             
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                  <li class="nav-item"><a href="#" class="nav-link logout" data-toggle = "modal" data-target = "#cerrar"><span class="fas fa-power-off text-danger"></span> Salir</a></li><!--Se utiliza para salir del sistema-->  
                </ul>

              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="modal fade" id="cerrar">
      <div class="modal-dialog" role = "document">
        <div class="modal-content text-center text-warning">
          <div class="modal-body">
            <i class="fas fa-info-circle fa-5x"></i>
            <h1 class="modal-title text-center text-dark" id="cerrar">Estas seguro ?</h1> 
            <a class="btn btn-primary" href= "../modulos/login/SesionClose.php">si, Salir</a>
            <a class="btn btn-danger text-white" data-dismiss="modal">Cancelar</a>  
          </div>
        </div>
      </div>  
    </div>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
         <div class="right_col" role="main" >
          <div>
          

         
          </div>

        </div>
      </div>
      </section> 
    </div>
    <!-- JavaScript files-->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/malihu/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/alertifyjs/alertify.js"></script> 

    <!-- Main File-->
    <script src="../js/front.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
 
  </body>
</html>
 