<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <title>Login | Dashboard Mais Valor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- chamada css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <a href="index.html">
                                <span><img src="assets/images/logo-light.png" alt="" height="18"></span>
                            </a>
                        </div>

                        <!-- titulo -->
                        <h4 class="mt-0">Entrar </h4>
                        <p class="text-muted mb-4"> Digite seu endereço de e-mail e senha para acessar a conta.</p>

                        <!-- inicio do formulario -->
                        <form action="#">
                            <div class="form-group">
                                <label for="emailaddress">Endereço de e-mail</label>
                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Entre com seu e-mail">
                            </div>
                            <div class="form-group">
                                <a href="pagina-esqueceu-senha.html" class="text-muted float-right"><small>Esqueceu sua senha?</small></a>
                                <label for="password">Senha</label>
                                <input class="form-control" type="password" required="" id="password" placeholder="Entre com sua senha">
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                    <label class="custom-control-label" for="checkbox-signin">Lembre de mim</label>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> Login </button>
                            </div>
                          
                            
                        </form>
                        <!-- final do formulario-->

                    </div> <!-- fim . cartão - corpo -->
                </div> <!-- fim . alinhar - itens- centro .d-flex.h-100-->
            </div>
            <!-- autenticação final - caixa de formulario-->

            <!-- Autenticar conteúdo -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3">Dashboard Mais Valor </h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> Ajudando a monitorar seu negócio de forma àgil. <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    
                </div> <!-- fim do conteudo -->
            </div>
            <!-- fim conteúdo de autenticação  -->
        </div>
        <!-- fim de autenticação final-->

        <!-- agrupar -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

    </body>

</html>