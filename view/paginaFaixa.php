<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Faixa | Dashboard Mais valor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body data-layout="detached" class="loading">

        <!-- Topbar Start -->
        <div class="navbar-custom topnav-navbar topnav-navbar-dark">
            <div class="container-fluid">

               <!-- LOGO -->
                <a href="index.html" class="topnav-logo">
                    <span class="topnav-logo-lg">
                        <img src="assets/images/white.png" alt="" height="16">
                    </span>
                    <span class="topnav-logo-sm">
                        <img src="assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/flags/br.png" alt="user-image" class="mr-1" height="12"> <span
                                class="align-middle">Português</span>
                        </a>
                        
                    </li>
                

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg"
                            aria-labelledby="topbar-notifydrop">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="javascript: void(0);" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notificação
                                </h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                               Ver todos 
                            </a>

                        </div>
                    </li>
            
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name">Dominic Keller</span>
                                <span class="account-position">Founder</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                           aria-labelledby="topbar-userdrop">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bem vindo!</h6>
                            </div>

                            <!-- item-->
                            <a href="pagina-perfil.html" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle mr-1"></i>
                                <span>Minha conta</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0)" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit mr-1"></i>
                                <span>Configurações</span>
                            </a>

                           
                             <!-- item-->
                            <a href="pagina-bloqueio.html" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline mr-1"></i>
                                <span>Tela de bloqueio</span>
                            </a>

                            <!-- item-->
                            <a href="pagina-logout.html" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout mr-1"></i>
                                <span>Sair</span>
                            </a>

                         
                        </div>
                    </li>

                </ul>
                <a class="button-menu-mobile disable-btn">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <div class="app-search">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Procurar...">
                            <span class="mdi mdi-magnify"></span>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Procurar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end Topbar -->
        
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu left-side-menu-detached">

                    <div class="leftbar-user">
                        <a href="javascript: void(0);">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>
 <!--- menu lateral-->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Navegação</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge badge-info badge-pill float-right">4</span>
                                <span> Dashboard </span>
                            </a>
                           <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="dashboard-analytics.html">Google Analytics</a>
                                 
                                </li>
                               
                           </ul>
                        </li>

                        <li class="side-nav-title side-nav-item">Apps</li>

                        <li class="side-nav-item">
                            <a href="pagina-calculo.html" class="side-nav-link">
                                <i class=" uil-calculator-alt"></i>
                                <span> Cálculo</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="pagina-liberação.html" class="side-nav-link">
                                <i class= "uil-lock-access"></i>
                                <span> Liberação de acesso</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-search-plus"></i>
                                <span> Cadastro </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                  <a href="pagina-coban.html">Coban </a>
                                </li>

                                <li>
                                    <a href="pagina-convenio.html">Convênios</a>
                                </li>
                                <li>
                                    <a href="pagina-produto.html">Produtos</a>
                                </li>
              
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Comissão
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="pagina-convenio-2.html">Convênio</a>
                                        </li>
                                        <li>
                                            <a href="pagina-convenio-produto.html">Convênio e produto</a>
                                        </li>
                                        <li>
                                          <a href="pagina-produto-2.html">Produto</a>
                                        </li>
                                        <li>
                                            <a href="pagina-taxa-prazo.html">Taxa e prazo</a>
                                        </li> 
                                    </ul>
                                </li>

                                <li>
                                    <a href="pagina-metas.html">Metas</a>
                                </li>

                               <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Campanha
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="pagina-grupo.html">Grupo</a>
                                        </li>
                                        <li>
                                            <a href="pagina-faixa.html">faixa</a>
                                        </li> 
                                    </ul>
                                </li>

                                <li>
                                    <a href="pagina-chavej.html">Chave J</a>
                                </li>
                                
                                <li>
                                    <a href="pagina-equipes.html">Equipes </a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-document-layout-center"></i>
                                <span> Extras </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                  
                                <li>
                                    <a href="pagina-upload.html">Upload de arquivo</a>
                                </li> 
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-location-point"></i>
                                <span> Mapas </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="pagina-gloogle-maps.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="pagina-mapas-vetoriais.html">Mapas Vetorizados</a>
                                </li>
                            </ul>
                        </li>
        
                    </ul>

                    <!-- End Sidebar -->
					
                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->

                <div class="content-page">
                    <div class="content">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Cadastros</a></li>
                                               <li class="breadcrumb-item"><a href="javascript: void(0);">Companha</a></li>
                                            <li class="breadcrumb-item active">Faixa</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Cadastro de campanha por faixa</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                  

      
                          </br><div class="app-search">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Procurar cadastros...">
                            <span class="mdi mdi-magnify"></span>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Procurar</button>
                            </div>
                        </div>
                    </form>
                </div></br></br>

 
 <table  id = "selection-datatable"  class = "table dt-responsive nowrap w-100" > 
    <thead > 
        <tr > 
            <th>Código convênio</th> 
            <th>Valor mínimo</th> 
            <th>Valor máximo</th> 
            <th>Prazo mínimo</th> 
            <th>Premição da faixa</th> 
            <th>Data de ínicio cálculo</th> 
            <th>Data de fim cálculo</th> 
            <th>Status</th> 
            
            
        </tr > 
    </thead > 


    <tbody > 
        <tr > 
            <td> Tiger Nixon </td > 
            <td> Arquiteto de sistemas </td > 
            <td> Edimburgo </td > 
            <td> 61 </td> 
            <td> 61 </td> 
            <td> 61 </td>
            <td> 61 </td>  

            <td>
                <!-- Switch-->
                <div>
                    <input type="checkbox" id="switch1" checked data-switch="success"/>
                    <label for="switch1" data-on-label="Sim" data-off-label="Não" class="mb-0 d-block"></label>
                </div>
            </td>
           
        </tr > 

        <tr > 
            <td> Garrett Winters </td> 
            <td> Contador </td> 
            <td> Tóquio </td> 
            <td> 63 </td> 
            <td> 63 </td> 
            <td> 63 </td> 
            <td> 63 </td> 
   
            <td>
                <!-- Switch-->
                <div>
                    <input type="checkbox" id="switch09" checked data-switch="success"/>
                    <label for="switch09" data-on-label="Sim" da ta-off-label="Não" class="mb-0 d-block"></label>
                </div>
            </td>
         
        </tr>
    </tbody> 
</table ></br>


</br><button type="button " class="btn btn-success btn-rounded">Novo </button></br>



                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                   2019 © Dashboard - Mais valor
                                </div>
                                
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->


      
       <!-- Right Sidebar -->
        <div class="right-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Configurações</h5>
            </div>

            <div class="slimscroll-menu rightbar-content">
<div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Personalize </strong> o esquema de cores geral
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Esquema de cores</h5>
                    <hr class="mt-1" />

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="custom-control-label" for="light-mode-check">modo claro </label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="custom-control-label" for="dark-mode-check">Modo escuro</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Barra lateral </h5>
                    <hr class="mt-1" />

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check"
                            checked />
                        <label class="custom-control-label" for="fixed-check">Rolavél</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="condensed"
                            id="condensed-check" />
                        <label class="custom-control-label" for="condensed-check">Condensado</label>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard-analytics.js"></script>
        <!-- end demo js-->
        
    </body>
</html>