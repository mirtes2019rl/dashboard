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
                                        </form>
                                    </div>
                                    <h4 class="page-title">Google analytics</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-right'></i>
                                        <h6 class="text-uppercase mt-0">Usuários ativos</h6>
                                        <h2 class="my-2" id="active-users-count">121</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success mr-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">desde o mês passado</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->

                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-window-restore float-right'></i>
                                        <h6 class="text-uppercase mt-0">Vizualização por minuto</h6>
                                        <h2 class="my-2" id="active-views-count">560</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-danger mr-2"><span class="mdi mdi-arrow-down-bold"></span> 1.08%</span>
                                            <span class="text-nowrap">desde semana passada</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->

                               
                            </div> <!-- end col -->

                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            Property HY1xx is not receiving hits. Either your site is not receiving any sessions or it is not tagged correctly.
                                        </div>
                                        <ul class="nav float-right d-none d-lg-flex">
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">Hoje</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">7dias</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">15dias</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">1mês</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">1ano</a>
                                            </li>
                                        </ul>
                                        <h4 class="header-title mb-3">Visão geral das sessões</h4>

                                        <div id="sessions-overview" class="apex-charts mt-3" data-colors="#0acf97"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Atualizar Relatório</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Exportar Relatório</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Sessões por cidades</h4>

                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div id="world-map-markers" class="mt-3 mb-3" style="height: 300px">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div id="country-chart" class="apex-charts" data-colors="#10c469"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop p-0"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0);" class="dropdown-item">Atualizae relatório</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Exportar relatório</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Vizulizações por minuto</h4>

                                        <div id="views-min" class="apex-charts mt-2" data-colors="#10c469"></div>

                                        <div class="table-responsive mt-3">
                                            <table class="table table-sm mb-0 font-13">
                                                <thead>
                                                    <tr>
                                                        <th>Páginas</th>
                                                        <th>Visualizações</th>
                                                        <th>Taxa de rejeição</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-muted">Dashboard/Google analytics</a>
                                                        </td>
                                                        <td>25</td>
                                                        <td>87.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-crm</a>
                                                        </td>
                                                        <td>15</td>
                                                        <td>21.48%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-muted">/ubold/dashboard</a>
                                                        </td>
                                                        <td>10</td>
                                                        <td>63.59%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-muted">/minton/home</a>
                                                        </td>
                                                        <td>7</td>
                                                        <td>56.12%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        
                            

                        </div>
                        <!-- end row -->
                        
                    </div> <!-- End Content -->
