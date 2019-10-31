<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Perfil | Dashboard Mais valor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
     <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                            <input type="text" class="form-control" placeholder="Search...">
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
                                <i class="uil-calender"></i>
                                <span> Cálculo</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
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
                                <li>
                                    <a href="pages-campanha">Campanhas</a>
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
                    <!-- Barra lateral - esquerda -->

                </div>
                <!-- fim da barra lateral esquerda-->

                <div class="content-page">
                    <div class="content">
                        
                    <!-- inicio menu da pagina-->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Paginas</a></li>
                                            <li class="breadcrumb-item active">Perfil</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"></h4>
                                </div>
                            </div>
                        </div>     
                    <!-- fim do menu da pagina --> 


                        <div class="row">
                            <div class="col-sm-12">

                           <!-- Perfil -->
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="media">
                                                    <span class="float-left m-2 mr-4"><img src="assets/images/users/avatar-2.jpg" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                                                    <div class="media-body">

                                                        <h4 class="mt-1 mb-1 text-white">Michael Franklin</h4>
                                                        <p class="font-13 text-white-50"> Authorised Brand Seller</p>

                                                        <ul class="mb-0 list-inline text-light">
                                                            <li class="list-inline-item mr-3">
                                                                <h5 class="mb-1">$ 25,184</h5>
                                                                <p class="mb-0 font-13 text-white-50">Rendimento total</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <h5 class="mb-1">5482</h5>
                                                                <p class="mb-0 font-13 text-white-50">Número de vendas</p>
                                                            </li>
                                                        </ul>
                                                    </div> <!-- end media-body-->
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-right">
                                                    <button type="button" class="btn btn-light">
                                                        <i class="mdi mdi-account-edit mr-1"></i> Editar perfil
                                                    </button>
                                                </div>
                                            </div> <!-- fim da col-->
                                        </div> <!-- linha final-->

                                    </div> <!-- fim do corpo / caixa de usuario/perfil -->
                                </div><!--end profile/ card -->
                            </div> <!-- fim da col-->
                        </div><!-- linha final-->


                        <div class="row">
                            <div class="col-lg-4">
                                <!-- informações pessoais -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Informações do vendedor </h4>
                                        <p class="text-muted font-13">
                                            Hye, I’m Michael Franklin residing in this beautiful world. I create websites and mobile apps with great UX and UI design. I have done work with big companies like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra line for filling space. Fill as many you want.
                                        </p>

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Nome :</strong> <span class="ml-2">Michael A. Franklin</span></p>

                                            <p class="text-muted"><strong>Telefone :</strong><span class="ml-2">(+12) 123 1234 567</span></p>

                                            <p class="text-muted"><strong>E-mail :</strong> <span class="ml-2">coderthemes@gmail.com</span></p>

                                            <p class="text-muted"><strong>Localização :</strong> <span class="ml-2">USA</span></p>

                                            

                                        </div>
                                    </div>
                                </div>
                                <!--fim das informações pessoais -->

                                <!-- caixa de numero do telefone-->
                                <div class="card text-white bg-info overflow-hidden">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h4> <i class="mdi mdi-deskphone"></i> telefone : 1-234-567-8901</h4>
                                        </div>
                                    </div> <!--final do corpo do cartão-->
                                </div> <!-- fim do cartão-->
                                <!-- final da caixa do numero do telefone-->

                          

                            </div> <!-- fim da col-->

                            <div class="col-lg-8">

                                <!-- gráfico-->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Comissão e meta por periodo</h4>
                                        <div style="height: 260px;" class="chartjs-chart">
                                            <canvas id="high-performing-product"></canvas>
                                        </div>        
                                    </div>
                                </div>
                                <!-- fim do grafico-->

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-basket float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Meta</h6>
                                                <h2 class="m-b-20">1,587</h2>
                                                <span class="badge badge-primary"> +11% </span> <span class="text-muted">do periodo anterior</span>
                                            </div> <!-- fim do corpo do cartão-->
                                        </div> <!--fim do cartão-->
                                    </div><!-- fim da col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-box float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Comissão</h6>
                                                <h2 class="m-b-20">$<span>46,782</span></h2>
                                                <span class="badge badge-danger"> -29% </span> <span class="text-muted">Do mês anterior</span>
                                            </div> <!--fim do corpo do cartão-->
                                        </div> <!--fim do cartão-->
                                    </div><!-- fim da col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-jewel float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Total de produtos vendidos no mês</h6>
                                                <h2 class="m-b-20">1,890</h2>
                                                <span class="badge badge-primary"> +89% </span> <span class="text-muted">do mês passado</span>
                                            </div> <!-- fim do corpo do cartão-->
                                        </div> <!--fim do cartão-->
                                    </div><!-- fim da col -->

                                </div>
                                <!-- linha final-->


                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Minhas vendas</h4>

                                        <div class="table-responsive">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Produto vendido</th>
                                                        <th>Valor do produto vendido</th>
                                                        <th>Meta</th>
                                                        <th>Valor ganho</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ASOS Ridley High Waist</td>
                                                        <td>$79.49</td>
                                                        <td><span class="badge badge-primary">82 Pcs</span></td>
                                                        <td>$6,518.18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marco Lightweight Shirt</td>
                                                        <td>$128.50</td>
                                                        <td><span class="badge badge-primary">37 Pcs</span></td>
                                                        <td>$4,754.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Half Sleeve Shirt</td>
                                                        <td>$39.99</td>
                                                        <td><span class="badge badge-primary">64 Pcs</span></td>
                                                        <td>$2,559.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lightweight Jacket</td>
                                                        <td>$20.00</td>
                                                        <td><span class="badge badge-primary">184 Pcs</span></td>
                                                        <td>$3,680.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marco Shoes</td>
                                                        <td>$28.49</td>
                                                        <td><span class="badge badge-primary">69 Pcs</span></td>
                                                        <td>$1,965.81</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- tabela final responsiva-->
                                    </div> <!-- fim col-->
                                </div> <!-- linha final-->

                            </div>
                            <!-- fim da col -->

                        </div>
                        <!-- linha finhal -->
                        
                    </div> <!--final do conteudo-->

                    <!-- inicio do rodapé -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                2019 © Dashboard - Mais valor 
                                </div> 
                            </div>
                        </div>
                    </footer>
                    <!-- fim do rodapé -->

                </div> <!-- conteudo da pagina -->

            </div> <!-- invólucro final-->
        </div>
        <!-- fim do conteiner -->


        <!-- Barra lateral direita -->
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

                    <!-- configurações -->
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

                    <!--Barra lateral esquerda-->
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

                  
                </div> <!-- preenchimento final-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Barra direita-->


        <!-- agrupar -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!--js de terceiros -->
        <script src="assets/js/vendor/Chart.bundle.min.js"></script>
        <!-- fim de js de terceiros-->

        <!--aplicativo de demonstração-->
        <script src="assets/js/pages/demo.profile.js"></script>
        <!-- fianl da demostração js-->
        
    </body>
</html>
