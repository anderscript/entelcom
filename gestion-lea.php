<?php


include("sql/conexion.php");
include('sql/variables-usuarios.php');

$id = $_GET['id'];

$extraccion_lead = "SELECT * from lead where id_cliente = '$id'";

$resultado_lead = $conn -> query($extraccion_lead);

$perdomo =$resultado_lead -> fetch_assoc();

$extraccion_gestiones = "SELECT * from notas_gestiones where id_cliente = '$id'";

$resultado_gestiones = $conn -> query($extraccion_gestiones);


$extraccion_oportunidad = "SELECT * from oportunidad where id_cliente = '$id'";

$resultado_oportunidad = $conn -> query($extraccion_oportunidad);

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
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                            <li class="nav-item"><a class="nav-link" href="crm-index.html"><i class="ti-control-record"></i>CRM</a></li>
                            <li class="nav-item"><a class="nav-link" href="helpdesk-index.html"><i class="ti-control-record"></i>Helpdesk</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
                        </ul>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-email-inbox.html">Inbox</a></li>
                                    <li><a href="apps-email-read.html">Read Email</a></li>
                                </ul>
                            </li>  
                            <li class="nav-item"><a class="nav-link" href="apps-chat.html"><i class="ti-control-record"></i>Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-contact-list.html"><i class="ti-control-record"></i>Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-calendar.html"><i class="ti-control-record"></i>Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-files.html"><i class="ti-control-record"></i>File Manager</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-invoice.html"><i class="ti-control-record"></i>Invoice</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-tasks.html"><i class="ti-control-record"></i>Tasks</a></li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Projects <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-project-overview.html">Overview</a></li>                                    
                                    <li><a href="apps-project-projects.html">Projects</a></li>
                                    <li><a href="apps-project-board.html">Board</a></li>
                                    <li><a href="apps-project-teams.html">Teams</a></li>
                                    <li><a href="apps-project-files.html">Files</a></li>
                                    <li><a href="apps-new-project.html">New Project</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Ecommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-ecommerce-products.html">Products</a></li>                                    
                                    <li><a href="apps-ecommerce-product-list.html">Product List</a></li>
                                    <li><a href="apps-ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="apps-ecommerce-cart.html">Cart</a></li>
                                    <li><a href="apps-ecommerce-checkout.html">Checkout</a></li>                                    
                                </ul>
                            </li>
                        </ul>
                    </li> 
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-register.html"><i class="ti-control-record"></i>Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-lock-screen.html"><i class="ti-control-record"></i>Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-404.html"><i class="ti-control-record"></i>Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-500.html"><i class="ti-control-record"></i>Error 500</a></li>
                        </ul>
                    </li> 
    
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Components & Extra</li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="box" class="align-self-center menu-icon"></i><span>UI Kit</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>UI Elements <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>                                    
                                    <li><a href="ui-avatar.html">Avatar</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-badges.html">Badges</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousels.html">Carousels</a></li>
                                    <li><a href="ui-check-radio.html"><span>Check & Radio</span></a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grids.html">Grids</a></li> 
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-list.html">List</a></li>                                   
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-navbar.html">Navbar</a></li> 
                                    <li><a href="ui-paginations.html">Paginations</a></li>   
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>                                
                                    <li><a href="ui-progress.html">Progress</a></li>
                                    <li><a href="ui-spinners.html">Spinners</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-toasts.html">Toasts</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-videos.html">Videos</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="advanced-animation.html">Animation</a></li>
                                    <li><a href="advanced-clipboard.html">Clip Board</a></li>
                                    <li><a href="advanced-highlight.html">Highlight</a></li>
                                    <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                                    <li><a href="advanced-kanban.html">Kanban</a></li>
                                    <li><a href="advanced-lightbox.html">Lightbox</a></li> 
                                    <li><a href="advanced-nestable.html">Nestable List</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-ratings.html">Ratings</a></li>
                                    <li><a href="advanced-ribbons.html">Ribbons</a></li>
                                    <li><a href="advanced-session.html">Session Timeout</a></li>
                                    <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="forms-advanced.html">Advance Elements</a></li>
                                    <li><a href="forms-elements.html">Basic Elements</a></li>
                                    <li><a href="forms-editors.html">Editors</a></li>
                                    <li><a href="forms-uploads.html">File Upload</a></li>
                                    <li><a href="forms-repeater.html">Repeater</a></li>
                                    <li><a href="forms-validation.html">Validation</a></li>
                                    <li><a href="forms-wizard.html">Wizard</a></li>
                                    <li><a href="forms-x-editable.html">X Editable</a></li>
                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="charts-apex.html">Apex</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-flot.html">Flot</a></li>
                                    <li><a href="charts-morris.html">Morris</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic</a></li>
                                    <li><a href="tables-datatable.html">Datatables</a></li>
                                    <li><a href="tables-editable.html">Editable</a></li>
                                    <li><a href="tables-responsive.html">Responsive</a></li>
                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-feather.html">Feather</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-themify.html">Themify</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-leaflet.html">Leaflet Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>  
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-templates-alert.html">Alert Email</a></li>
                                    <li><a href="email-templates-basic.html">Basic Action Email</a></li>                                    
                                    <li><a href="email-templates-billing.html">Billing Email</a></li>
                                </ul>
                            </li>   
                        </ul>                        
                    </li>
    
                    <li>
                        <a href="widgets.html"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Widgets</span><span class="badge badge-soft-success menu-arrow">New</span></a>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="pages-blogs.html"><i class="ti-control-record"></i>Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-faqs.html"><i class="ti-control-record"></i>FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-pricing.html"><i class="ti-control-record"></i>Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-profile.html"><i class="ti-control-record"></i>Profile</a></li>   
                            <li class="nav-item"><a class="nav-link" href="pages-starter.html"><i class="ti-control-record"></i>Starter Page</a></li>                         
                            <li class="nav-item"><a class="nav-link" href="pages-timeline.html"><i class="ti-control-record"></i>Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-treeview.html"><i class="ti-control-record"></i>Treeview</a></li>
                        </ul>
                    </li>           
                </ul>
    
                <div class="update-msg text-center">
                    <a href="javascript: void(0);" class="float-right close-btn text-white" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5 class="mt-3">Mannat Themes</h5>
                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                </div>
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <?php include("menu.php"); ?>
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
                                        <h4 class="page-title">Timelines</h4>
                                        
                                    </div>
                                        
                                    </div><!--end col-->
                                  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">     
                                <div class="card-header">
                                    <h4 class="card-title">Datos</h4>
                                </div><!--end card-header--> 
                                
                                <textarea id="nota" class="form-control" id="exampleFormControlTextarea1" placeholder="Escribir una nota" rows="3"></textarea>
                                <button class="btn btn-primary" id="guardar_nota"> Guardar </button> 
                                                       
                                 <div class="card-body"> 
                                    <div class="slimscroll activity-scroll">
                                        <div class="activity">
                                        <div class='card'>
                                            
                                <div class='card-body  text-center'>
                                <h4 class='m-0 font-weight-semibold text-dark font-16 mt-3'><?php echo $perdomo['nombre']; ?></h4>   
                                    <p class='text-muted  mb-0 font-13'><span class='text-dark'>Creado por: </span><?php echo $perdomo['creador']; ?></p> 
                                    <div class='mt-3'>
                                    <h5 class='font-24 m-0 font-weight-bold' id="oportu"><?php echo "$".$perdomo['oportunidad']; ?></h5>
                                    <p class='mb-0 text-muted'>Valor Oportunidad</p>                                        
                                    </div> 
                                    <button class='btn btn-soft-primary  btn-block mt-3' id="modificar_oportunidad">Modificar Oportunidad</button>
                                    </div>         
                                    </div>

                                             <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="las la-phone"></i></span></div>
                                                                <input type="text" class="form-control" value="<?php echo $perdomo['telefono']; ?>" placeholder="Phone" id="phone" aria-describedby="basic-addon1">
                                                                <input type="hidden" value="<?php echo $id; ?>" id="id">
                                                                <input type="hidden" value="<?php echo $nombre; ?>" id="nombre_usuario">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="las la-at"></i></span></div>
                                                                <input type="text" class="form-control" value="<?php echo $perdomo['correo']; ?>" placeholder="Email" aria-describedby="basic-addon1" id="correo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-globe"></i></span></div>
                                                                <input type="text" class="form-control" value="<?php echo $perdomo['pais']; ?>" placeholder="Pais" aria-describedby="basic-addon1" id="pais">
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                             
                                        </div><!--end activity-->
                                    </div><!--end activity-scroll-->
                                </div>  <!--end card-body-->                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-8">
                            <div class="card"> 
                                <div class="card-header">
                                    <h4 class="card-title">Gestiones</h4>
                                </div><!--end card-header-->                                       
                                <div class="card-body"> 
                                    <div class="main-timeline mt-3" id="gestiones">
                                        
                                    </div>
                                </div>  <!--end card-body-->                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        
                    </div><!--end row-->

                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Dastyle <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <script src="assets/js/app-value.js"></script>
        
    </body>

</html>