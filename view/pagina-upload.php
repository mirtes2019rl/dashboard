<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title> Upload de imagens | Dashboard Mais valor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

       <!--favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- chamada css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body data-layout="detached" class="loading">

    <!-- Início da barra superior -->

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
        <!-- Fim da barra superior -->
        
        <!-- Inicio do conteudo-->
        <div class="container-fluid">

            <!-- Pagina inicial -->
            <div class="wrapper">

                <!-- ========== inicio barra lateral esquerda ========== -->
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
        
                    </ul><!-- fim da barra lateral --> 

                    <div class="clearfix"></div>
                    <!--barra lateral esquerda-->

                </div>
                <!-- fim barra lateral esquerda -->

                <div class="content-page">
                    <div class="content">
                        
                        <!-- titulo da pagina -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item">
                                                <a href="javascript: void(0);">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="javascript: void(0);">Extras</a>
                                            </li>
                                            <li class="breadcrumb-item active">Upload de imagens</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Upload de imagens</h4>
                                </div>
                            </div>
                        </div>
                        <!-- fim do titulo da pagina -->









<!-------------------------------------------------------------------------------------->


<!--conteudo da pagina -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title m-t-0">Dropzone File Upload</h4>
                                        <p class="text-muted font-14">
                                            DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#file-upload-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="file-upload-preview">
                                                <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                    data-upload-preview-template="#uploadPreviewTemplate">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>

                                                    <div class="dz-message needsclick">
                                                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                        <h3>Solte os arquivos aqui ou clique para fazer o upload.</h3>
                                                        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                            <strong>not</strong> actually uploaded.)</span>
                                                    </div>
                                                </form>

                                                <!-- Preview -->
                                                <div class="dropzone-previews mt-3" id="file-previews"></div>                                         
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="file-upload-code">
                                                <p>Make sure to include following js files at end of <code>body element</code></p>

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- plugin js --&gt;
                                                        &lt;script src=&quot;assets/js/vendor/dropzone.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;!-- init js --&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.fileupload.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- File Upload --&gt;
                                                        &lt;form action=&quot;/&quot; method=&quot;post&quot; class=&quot;dropzone&quot; id=&quot;myAwesomeDropzone&quot; data-plugin=&quot;dropzone&quot; data-previews-container=&quot;#file-previews&quot;
                                                            data-upload-preview-template=&quot;#uploadPreviewTemplate&quot;&gt;
                                                            &lt;div class=&quot;fallback&quot;&gt;
                                                                &lt;input name=&quot;file&quot; type=&quot;file&quot; multiple /&gt;
                                                            &lt;/div&gt;
                                                        
                                                            &lt;div class=&quot;dz-message needsclick&quot;&gt;
                                                                &lt;i class=&quot;h1 text-muted dripicons-cloud-upload&quot;&gt;&lt;/i&gt;
                                                                &lt;h3&gt;Drop files here or click to upload.&lt;/h3&gt;
                                                                &lt;span class=&quot;text-muted font-13&quot;&gt;(This is just a demo dropzone. Selected files are
                                                                    &lt;strong&gt;not&lt;/strong&gt; actually uploaded.)&lt;/span&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;
                                                        
                                                        &lt;!-- Preview --&gt;
                                                        &lt;div class=&quot;dropzone-previews mt-3&quot; id=&quot;file-previews&quot;&gt;&lt;/div&gt;

                                                        &lt;!-- file preview template --&gt;
                                                        &lt;div class=&quot;d-none&quot; id=&quot;uploadPreviewTemplate&quot;&gt;
                                                            &lt;div class=&quot;card mt-1 mb-0 shadow-none border&quot;&gt;
                                                                &lt;div class=&quot;p-2&quot;&gt;
                                                                    &lt;div class=&quot;row align-items-center&quot;&gt;
                                                                        &lt;div class=&quot;col-auto&quot;&gt;
                                                                            &lt;img data-dz-thumbnail src=&quot;#&quot; class=&quot;avatar-sm rounded bg-light&quot; alt=&quot;&quot;&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class=&quot;col pl-0&quot;&gt;
                                                                            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;text-muted font-weight-bold&quot; data-dz-name&gt;&lt;/a&gt;
                                                                            &lt;p class=&quot;mb-0&quot; data-dz-size&gt;&lt;/p&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class=&quot;col-auto&quot;&gt;
                                                                            &lt;!-- Button --&gt;
                                                                            &lt;a href=&quot;&quot; class=&quot;btn btn-link btn-lg text-muted&quot; data-dz-remove&gt;
                                                                                &lt;i class=&quot;dripicons-cross&quot;&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                        
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row -->
    
                        
                    </div> <!-- Fim do conteúdo -->






<!--------------------------------------------------------------------------------------->









                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                 2019 © Dashboard- Mais Valor
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
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="slimscroll-menu rightbar-content">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc. Note that, Hyper stores the
                        preferences
                        in local storage.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check"
                            checked />
                        <label class="custom-control-label" for="fixed-check">Scrollable</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="condensed"
                            id="condensed-check" />
                        <label class="custom-control-label" for="condensed-check">Condensed</label>
                    </div>

                    <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                        class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase
                        Now</a>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

        <!-- file preview template -->
        <div class="d-none" id="uploadPreviewTemplate">
            <div class="card mt-1 mb-0 shadow-none border">
                <div class="p-2">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                        </div>
                        <div class="col pl-0">
                            <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                            <p class="mb-0" data-dz-size></p>
                        </div>
                        <div class="col-auto">
                            <!-- Button -->
                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                <i class="dripicons-cross"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- Dropzone js -->
        <script src="assets/js/vendor/dropzone.min.js"></script>

        <!-- File upload js -->
        <script src="assets/js/ui/component.fileupload.js"></script>
        
    </body>
</html>
