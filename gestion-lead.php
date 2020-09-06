<?php


include("sql/conexion.php");
include('sql/variables-usuarios.php');

$id = $_GET['id'];

$extraccion_lead = "SELECT * from lead where id_cliente = '$id'";

$resultado_lead = $conn -> query($extraccion_lead);

$perdomo =$resultado_lead -> fetch_assoc();

$extraccion_gestiones = "SELECT * from notas_gestiones where id_cliente = '$id'";

$resultado_gestiones = $conn -> query($extraccion_gestiones);



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

        <link href="plugins/leaflet/leaflet.css" rel="stylesheet">
        <link href="plugins/lightpick/lightpick.css" rel="stylesheet" />

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
                                        <h4 class="page-title">Lead</h4>
                                       
                                    </div><!--end col-->
                                    
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                                              
                                <div class="card-body">
                                    <div class="dastyle-profile">
                                        <div class="row" id="datos">
                                          
                                        <div class="col-lg-4 align-self-center">
                                                <div class="row">
                                                    
                                                    
                                                </div><!--end row-->                                               
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->          
                            </div> <!--end card-->    
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="pb-4">
                        <ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="Profile_Project_tab" data-toggle="pill" href="#Profile_Project">Oportunidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="Profile_Post_tab" data-toggle="pill" href="#Profile_Post">Gestion</a>
                            </li><!--
                            <li class="nav-item">
                                <a class="nav-link" id="portfolio_detail_tab" data-toggle="pill" href="#Profile_Portfolio">Portfolio</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#Profile_Settings">Agregar Datos</a>
                            </li>
                        </ul>        
                    </div><!--end card-body-->
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade " id="Profile_Project" role="tabpanel" aria-labelledby="Profile_Project_tab">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <form>
                                                <div class="input-group input-group-lg">                               
                                                    <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Buscar">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-soft-primary"><i class="fas fa-search"></i></button>
                                                    </span>
                                                </div>                                                
                                            </form>                                            
                                        </div><!--end col-->
                                                                            
                                    </div><!--end row-->
                                    <div class="row" id="datos-oportunidad">
                                        
                                        </div><!--end row-->                                    
                                </div>
                                <div class="tab-pane fade show active" id="Profile_Post" role="tabpanel" aria-labelledby="Profile_Post_tab">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card">                                                        
                                                        <div class="card-body  report-card">
                                                            <div class="row d-flex justify-content-center">
                                                                <div class="col">
                                                                    <p class="text-dark mb-1 font-weight-semibold">Gestiones</p>
                                                                    <h3 class="my-2 font-24 font-weight-bold">0</h3>
                                                                    
                                                                </div>
                                                                <div class="col-auto align-self-center">
                                                                    <div class="report-main-icon bg-light-alt">
                                                                        <i data-feather="eye" class="align-self-center text-muted icon-md"></i>  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--end card-body-->          
                                                    </div> <!--end card-->    
                                                </div><!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="card">                                                        
                                                        <div class="card-body  report-card">
                                                            <div class="row d-flex justify-content-center">
                                                                <div class="col">
                                                                    <p class="text-dark mb-1 font-weight-semibold">Correos</p>
                                                                    <h3 class="my-2 font-24 font-weight-bold">0</h3>
                                                                    
                                                                </div>
                                                                <div class="col-auto align-self-center">
                                                                    <div class="report-main-icon bg-light-alt">
                                                                        <i data-feather="message-square" class="align-self-center text-muted icon-md"></i>  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--end card-body-->          
                                                    </div> <!--end card-->    
                                                </div><!--end col-->
                                            </div><!--end row--> 
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-dark font-weight-semibold title-border">Gestiones</p>
                                                        </div><!--end col-->
                                                    </div><!--end row-->    
                                                </div><!--end card-body-->  
                                                <div class="card-body border-bottom-dashed"> 
                                                    <ul class="list-unstyled mb-0">
                                                        <li id="gestiones">
                                                            
                                                               </li>
                                                            </ul> 
                                                        </li>
                                                    </ul> 
                                                </div><!--end card-body--> 
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-dark font-weight-semibold title-border">Dejar Observación</p>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body--> 
                                                <div class="card-body pt-0">
                                                    
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="nota" rows="5" id="leave_comment" placeholder="El cliente me indica pago para el día..."></textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 text-right">
                                                                <button type="submit" class="btn btn-primary px-4" id='guardar_nota'>Agregar</button>
                                                            </div>
                                                        </div>
                                                    
                                                </div><!--end card-body-->             
                                            </div> <!--end card-->  
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                           
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title">Ultimas Modificaciones</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>  <!--end row-->                                  
                                                </div><!--end card-header-->
                                                <div class="card-body">
                                                    <div class="button-list btn-social-icon">                                                
                                                        <code>Lista de los ultimos datos actualizados.</code>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->                                            
                                        </div><!--end col-->
                                    </div><!--end row-->    
                                </div>
                                <div class="tab-pane fade" id="Profile_Portfolio" role="tabpanel" aria-labelledby="portfolio_detail_tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ribbon4 rib4-primary">
                                                        <span class="ribbon4-band ribbon4-band-primary text-white text-center">50% off</span>                                        
                                                    </div><!--end ribbon-->  
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/dashboards/dastyle.jpg" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                                        </div><!--end col-->
                                                        <div class="col align-self-center">
                                                            <p class="font-18 font-weight-semibold mb-2">Dastyle - Admin & Dashboard Template</p>
                                                            <p class="text-muted">Dastyle is a Bootstrap 4 admin dashboard, 
                                                                It is fully responsive and included awesome 
                                                                features to help build web applications fast and easy.
                                                            </p>
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a> 
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a> 
                                                        </div><!--end col-->
                                                    </div> <!--end row-->  
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->  
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">                                 
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/dashboards/metrica.jpg" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                                        </div><!--end col-->
                                                        <div class="col align-self-center">
                                                            <p class="font-18 font-weight-semibold mb-2">Metrica - Admin & Dashboard Template</p>
                                                            <p class="text-muted">Metrica is a Bootstrap 4 admin dashboard, 
                                                                It is fully responsive and included awesome 
                                                                features to help build web applications fast and easy.
                                                            </p>
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a> 
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a> 
                                                        </div><!--end col-->
                                                    </div> <!--end row-->        
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->                                  
                                    </div>  <!--end row-->
                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">                                    
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/dashboards/crovex.jpg" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                                        </div><!--end col-->
                                                        <div class="col align-self-center">
                                                            <p class="font-18 font-weight-semibold mb-2">Crovex - Admin & Dashboard Template</p>
                                                            <p class="text-muted">Crovex is a Bootstrap 4 admin dashboard, 
                                                                It is fully responsive and included awesome 
                                                                features to help build web applications fast and easy.
                                                            </p>
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a> 
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a> 
                                                        </div><!--end col-->
                                                    </div> <!--end row-->   
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">                                    
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/dashboards/frogetor.jpg" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                                        </div><!--end col-->
                                                        <div class="col align-self-center">
                                                            <p class="font-18 font-weight-semibold mb-2">Frogetor - Admin & Dashboard Template</p>
                                                            <p class="text-muted">Frogetor is a Bootstrap 4 admin dashboard, 
                                                                It is fully responsive and included awesome 
                                                                features to help build web applications fast and easy.
                                                            </p>
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a> 
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a> 
                                                        </div><!--end col-->
                                                    </div> <!--end row-->    
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->                                 
                                    </div>  <!--end row-->
                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">                                 
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/dashboards/metrica.jpg" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                                        </div><!--end col-->
                                                        <div class="col align-self-center">
                                                            <p class="font-18 font-weight-semibold mb-2">Metrica - Admin & Dashboard Template</p>
                                                            <p class="text-muted">Metrica is a Bootstrap 4 admin dashboard, 
                                                                It is fully responsive and included awesome 
                                                                features to help build web applications fast and easy.
                                                            </p>
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a> 
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a> 
                                                        </div><!--end col-->
                                                    </div> <!--end row-->       
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">                    
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/dashboards/dastyle.jpg" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                                        </div><!--end col-->
                                                        <div class="col align-self-center">
                                                            <p class="font-18 font-weight-semibold mb-2">Dastyle - Admin & Dashboard Template</p>
                                                            <p class="text-muted">Dastyle is a Bootstrap 4 admin dashboard, 
                                                                It is fully responsive and included awesome 
                                                                features to help build web applications fast and easy.
                                                            </p>
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a> 
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a> 
                                                        </div><!--end col-->
                                                    </div> <!--end row-->   
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->                                 
                                    </div>  <!--end row-->
                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">                              
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/dashboards/frogetor.jpg" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                                        </div><!--end col-->
                                                        <div class="col align-self-center">
                                                            <p class="font-18 font-weight-semibold mb-2">Frogetor - Admin & Dashboard Template</p>
                                                            <p class="text-muted">Frogetor is a Bootstrap 4 admin dashboard, 
                                                                It is fully responsive and included awesome 
                                                                features to help build web applications fast and easy.
                                                            </p>
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a> 
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a> 
                                                        </div><!--end col-->
                                                    </div> <!--end row-->  
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col--> 
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">                               
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img src="assets/images/dashboards/crovex.jpg" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                                        </div><!--end col-->
                                                        <div class="col align-self-center">
                                                            <p class="font-18 font-weight-semibold mb-2">Crovex - Admin & Dashboard Template</p>
                                                            <p class="text-muted">Crovex is a Bootstrap 4 admin dashboard, 
                                                                It is fully responsive and included awesome 
                                                                features to help build web applications fast and easy.
                                                            </p>
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a> 
                                                            <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a> 
                                                        </div><!--end col-->
                                                    </div> <!--end row-->   
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->                                  
                                    </div>  <!--end row-->
                                </div>
                                <div class="tab-pane fade" id="Profile_Settings" role="tabpanel" aria-labelledby="settings_detail_tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title">Información personal</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>  <!--end row-->                                  
                                                </div><!--end card-header-->
                                                <div class="card-body">                       
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text" id="nombre-lead" value="<?php echo $perdomo['nombre']; ?>">
                                                            <input type="hidden" value="<?php echo $id; ?>" id="id">
                                                            <input type="hidden" value="<?php echo $nombre; ?>" id="nombre_usuario">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Compañia</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" id="compania-lead" type="text" value="<?php echo $perdomo['conpania']; ?>" placeholder="Nombre de la empresa">
                                                            <span class="form-text text-muted font-12">No es un dato obligatorio.</span>
                                                        </div>
                                                    </div>
                        
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Telefono</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="las la-phone"></i></span></div>
                                                                <input type="text" class="form-control" id="telefono-lead" value="<?php echo $perdomo['telefono']; ?>" placeholder="Phone" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="las la-at"></i></span></div>
                                                                <input type="text" class="form-control" id="email-lead" value="<?php echo $perdomo['correo']; ?>" placeholder="Email" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Website</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-globe"></i></span></div>
                                                                <input type="text" id="web-lead" class="form-control" value="<?php echo $perdomo['web']; ?>" placeholder="Opcional sitio web" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Pais</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <select class="form-control" id="pais-lead">
                                                                <option>Venezuela</option>
                                                                <option>Colombia</option>
                                                                <option>USA</option>
                                                                <option>Canada</option>
                                                                <option>Thailand</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" class="btn btn-primary btn-sm" id="guardar-cambios">Guardar Cambios</button>
                                                            
                                                        </div>
                                                    </div>                                                    
                                                </div>                                            
                                            </div>
                                        </div> <!--end col--> 
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Crear oportunidad</h4>
                                                </div><!--end card-header-->
                                                <div class="card-body"> 
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Valor</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text" placeholder="1000" id="valor-oportunidad">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Tipo</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <select class="form-control" type="text" id="tipo-oportunidad">
                                                                <option>Cuota</option>
                                                                <option>Compromiso</option>
                                                                <option>Ganado</option>
                                                                <option>Perdido</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Fecha</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="date" id="fecha-oportunidad">
                                                            <span class="form-text text-muted font-12">La fecha debe ser superior a la actual</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" id="guardar_oportunidad" class="btn btn-primary btn-sm">Guardar</button>
                                                            
                                                        </div>
                                                    </div>   
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                           
                                        </div> <!-- end col -->
                                                                              
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div>
                    </div>

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

        <script src="plugins/leaflet/leaflet.js"></script> 
        <script src="plugins/apexcharts/apexcharts.min.js"></script> 
        <script src="plugins/lightpick/lightpick.js"></script>
        <script src="assets/pages/jquery.profile.init.js"></script> 

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-new.js"></script>
    </body>

</html>