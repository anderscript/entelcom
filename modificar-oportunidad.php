<?php
include('sql/variables-usuarios.php');
include('sql/conexion.php');

$id = $_GET['id'];
$id_cliente = $_GET['id_cliente'];

$extraccion_oportunidad = "SELECT * from oportunidad where id = '$id'";

$resultado_oportunidad = $conn -> query($extraccion_oportunidad);
$perdomo = $resultado_oportunidad ->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dastyle - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="dark-sidenav">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="crm-index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <?php include('menu.php'); ?>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <?php include('head.php'); ?>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Modificar Oportunidad</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dastyle</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Validation</li>
                                        </ol>
                                    </div><!--end col-->
                                    
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Datos</h4>
                                    <p class="text-muted mb-3">Modifique los datos de la oportunidad
                                    </p>
                                    <form class="needs-validation" novalidate method="post" action="sql/modificar-oportunidad.php"> 
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Valor</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="<?php echo $perdomo['valor']; ?>" required name="valor">
                                                <input type="hidden" name="id"  value="<?php echo $id ?>">
                                                <input type="hidden" name="id_cliente"  value="<?php echo $id_cliente ?>">
                                            </div><!--end col-->
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Fecha</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="" value="<?php echo $perdomo['fecha']; ?>" required name="fecha">
                                               
                                            </div><!--end col-->
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom03">Tipo</label>
                                                <select type="text" class="form-control" id="validationCustom03" placeholder=""  required name="tipo">
                                                    
                                                    <option>Cuota</option>
                                                    <option>Ganado</option>
                                                    <option>Compromiso</option>
                                                    <option>Perdido</option>
                                                </select>
                                            </div><!--end col-->
                                        </div><!--end form-group-->
                                        <button class="btn btn-primary" type="submit">Editar</button>
                                    </form> <!--end form-->                                          
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        
                    
                </div><!-- container -->
                <?php include('footer.php'); ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/moment.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>

       <!-- Parsley js -->
       <script src="plugins/parsleyjs/parsley.min.js"></script>
       <script src="assets/pages/jquery.validation.init.js"></script>
       
       <!-- App js -->
       <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/app.js"></script>
        
    </body>

</html>