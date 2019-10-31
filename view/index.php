<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard Mais valor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />

     <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
		<link rel="stylesheet" href="assents/fonts/SancoaleSoftened.ttf">

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
                                  <a href="pagina-coban.html">Coban</a>
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
                                    <a href="pages-chavej.html">Chave J</a>
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
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-primary border-primary text-white">
                                                            <i class="mdi mdi-calendar-range font-13"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ml-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-primary ml-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                        <div class="row">
                            <div class="col-xl-5 col-lg-6">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Clientes</h5>
                                                <h3 class="mt-3 mb-3">36,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                    <span class="text-nowrap">desde o mês passado</span>  
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cart-plus widget-icon bg-success-lighten text-success"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Vendas</h5>
                                                <h3 class="mt-3 mb-3">5,543</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                                    <span class="text-nowrap">desde o mês passado</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-currency-usd widget-icon bg-success-lighten text-success"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Lucros</h5>
                                                <h3 class="mt-3 mb-3">$6,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                                    <span class="text-nowrap">desde o mês passado</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-pulse widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Growth">Crescimento</h5>
                                                <h3 class="mt-3 mb-3">+ 30.56%</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                    <span class="text-nowrap">desde o mês passado</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                            </div> <!-- end col -->

                            <div class="col-xl-7  col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Relatórios de vendas</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Exportar relatórios</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Lucros</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Ação</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Projeção x Real</h4>

                                        <div id="high-performing-product" class="apex-charts"
                                            data-colors="#536de6,#e3eaef"></div>

                                        <!-- <div style="height: 263px;" class="chartjs-chart">
                                            <canvas id="high-performing-product"></canvas>
                                        </div> -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Relatórios de vendas</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Exportar relatorios</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Lucros</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Ação</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Vendas</h4>

                                        <div class="chart-content-bg">
                                            <div class="row text-center">
                                                <div class="col-md-6">
                                                    <p class="text-muted mb-0 mt-3">Semana atual</p>
                                                    <h2 class="font-weight-normal mb-3">
                                                        <small class="mdi mdi-checkbox-blank-circle text-primary align-middle mr-1"></small>
                                                        <span>$58,254</span>
                                                    </h2>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-muted mb-0 mt-3">Semana anterior</p>
                                                    <h2 class="font-weight-normal mb-3">
                                                        <small class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></small>
                                                        <span>$69,524</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dash-item-overlay d-none d-md-block">
                                            <h5>Ganho de hoje: $2,562.30</h5>
                                            
                                            <a href="javascript: void(0);" class="btn btn-outline-primary">Exibir expecificação
                                                <i class="mdi mdi-arrow-right ml-2"></i>
                                            </a>
                                        </div>

                                        <div id="revenue-chart" class="apex-charts mt-3" 
                                            data-colors="#536de6,#10c469"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Relatórios de vendas</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Exportar relatórios</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Lucros</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Ação</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Vendas por local</h4>
                                        <div class="mb-4 mt-4">
                                            <div id="world-map-markers" style="height: 224px"></div>
                                        </div>

                                        <h5 class="mb-1 mt-0 font-weight-normal">New York</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value font-weight-bold">72k </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 font-weight-normal">San Francisco</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value font-weight-bold">39k </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 font-weight-normal">Sydney</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value font-weight-bold">25k </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 font-weight-normal">Singapore</h5>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value font-weight-bold">61k </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="" class="btn btn-sm btn-link float-right mb-3">Exportar
                                            <i class="mdi mdi-download ml-1"></i>
                                        </a>
                                        <h4 class="header-title mt-2">Produtos mais vendidos</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">ASOS Ridley High Waist</h5>
                                                            <span class="text-muted font-13">07 April 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$79.49</h5>
                                                            <span class="text-muted font-13">Preço</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">82</h5>
                                                            <span class="text-muted font-13">Quantidade</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$6,518.18</h5>
                                                            <span class="text-muted font-13">Montante</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">Marco Lightweight Shirt</h5>
                                                            <span class="text-muted font-13">25 March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$128.50</h5>
                                                            <span class="text-muted font-13">Preço</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">37</h5>
                                                            <span class="text-muted font-13">Quantidade</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$4,754.50</h5>
                                                            <span class="text-muted font-13">Montante</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">Half Sleeve Shirt</h5>
                                                            <span class="text-muted font-13">17 March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$39.99</h5>
                                                            <span class="text-muted font-13">Preço</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">64</h5>
                                                            <span class="text-muted font-13">Quantidade</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$2,559.36</h5>
                                                            <span class="text-muted font-13">Montante</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">Lightweight Jacket</h5>
                                                            <span class="text-muted font-13">12 March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$20.00</h5>
                                                            <span class="text-muted font-13">Preço</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">184</h5>
                                                            <span class="text-muted font-13">Quantidade</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$3,680.00</h5>
                                                            <span class="text-muted font-13">Montante</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">Marco Shoes</h5>
                                                            <span class="text-muted font-13">05 March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$28.49</h5>
                                                            <span class="text-muted font-13">Preço</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">69</h5>
                                                            <span class="text-muted font-13">Quantidade</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">$1,965.81</h5>
                                                            <span class="text-muted font-13">Montante</span>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6 order-lg-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Relatórios de vendas</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Exportar relatórios</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Lucros</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Ação</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Total de vendas</h4>

                                        <div id="average-sales" class="apex-charts mb-4 mt-4"
                                            data-colors="#536de6,#10c469,#ff5b5b,#f9c851"></div>
                                        

                                        <div class="chart-widget-list">
                                            <p>
                                                <i class="mdi mdi-square text-primary"></i> Call center
                                                <span class="float-right">$300.56</span>
                                            </p>
                                            <p>
                                                <i class="mdi mdi-square text-danger"></i> Indica Vendas
                                                <span class="float-right">$135.18</span>
                                            </p>
                                            <p>
                                                <i class="mdi mdi-square text-success"></i> Escritório
                                                <span class="float-right">$48.96</span>
                                            </p>
                                            <p class="mb-0">
                                                <i class="mdi mdi-square text-warning"></i>Equipe
                                                <span class="float-right">$154.02</span>
                                            </p>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6 order-lg-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Relatório de vendas</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Exportar relatórios</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Lucros</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Ação</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-2">Atividades recentes</h4>

                                        <div class="slimscroll" style="max-height: 424px;">
                                            <div class="timeline-alt pb-0">
                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">5 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                        <small>Dave Gamache added
                                                            <span class="font-weight-bold">Admin Dashboard</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">30 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                                        <small>Send you message
                                                            <span class="font-weight-bold">"Are you there?"</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">2 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                                        <small>Uploaded a photo
                                                            <span class="font-weight-bold">"Error.jpg"</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">14 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">16 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                        <small>Dave Gamache added
                                                            <span class="font-weight-bold">Admin Dashboard</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">22 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                                        <small>Send you message
                                                            <span class="font-weight-bold">"Are you there?"</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">2 days ago</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end timeline -->
                                        </div> <!-- end slimscroll -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
    
                        
                    </div> <!-- End Content -->

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    2019 © Dashboard - Mais valor
                                </div>
                                <div class="col-md-6">
                                    
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
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
        
    </body>
</html>
