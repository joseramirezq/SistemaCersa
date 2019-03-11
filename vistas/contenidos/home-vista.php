<!--CONTENIDO DEL LA PAGINA-->   
<div class="row">
              <div class="col-md-6">

                <!--formulario de busqueda-->
                <form action="">
                      <div class="input-group ">
                          <input type="text" class="form-control" placeholder="Escribe nombre curso o diplomado">
                          <span class="input-group-append">
                              <button class="file-upload-browse btn btn-inverse-primary" type="button"> <i class="fa fa-search"></i> Buscar</button>
                          </span>
                      </div>
                  </form>

                  <!--fin fformulario de bisqueda-->
              </div>

              <div class="col-md-2">
                  <div class="btn-group dropdown">
                        <button type="button" class="btn btn-warning dropdown-toggle " data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                         
                      <i class="fa fa-calendar-o"></i> Ordenar por fecha
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item badge badge-danger" aria-haspopup="true" aria-expanded="false"
                            data-toggle="modal" data-target="#nodalcambioestado" href="#">
                            <i class="fa fa-reply fa-fw"></i>Reciente</a><br>
                          <a class="dropdown-item badge badge-info" href="#">
                            <i class="fa fa-reply fa-fw"></i>Antiguo</a><br>
                        </div>
                   </div>
             </div>
              <div class="col-md-2">
                  <div class="btn-group dropdown">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-desktop"></i> Ordenar por Tipo
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item badge badge-danger" aria-haspopup="true" aria-expanded="false"
                            data-toggle="modal" data-target="#nodalcambioestado" href="#">
                            <i class="fa fa-reply fa-fw"></i>Curso</a><br>
                          <a class="dropdown-item badge badge-info" href="#">
                            <i class="fa fa-reply fa-fw"></i>Diplomado</a><br>
                        </div>
                   </div>
              </div>

              <div class="col-md-2">
               <a href="cursolista.php"><button type="button" class="mb-0 btn btn-dark btn-fw"> <i class="fa fa-list-ol"></i> Ver lista</button></a> 
              </div>


            </div>

            <br>

            <!--curos-->
          <div class="row text-center">

              <!--un formato agregar curso-->
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-head">
                    <br><br>
                      <h4 class="text-center">Agregar Curso / Dip</h4>
                      <div class="text-center">
                        <a href="<?php SERVERURL;?>agregarcurso"><button type="button" class="btn btn-icons btn-lg btn-rounded btn-outline-primary">
                            <i class="fa fa-plus fa-10x"></i>
                          </button>
                          </a>
                    
                          </div>
                    
                  </div>
                </div>
              </div>
            <!--fin formato un curso-->

            <!--un formato 1 curso-->
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="text-center">Obras por Impuestos</h4>
                      <div class="float-left">
                        <div class="d-flex flex-row align-items-center">
                            <i class="mdi mdi-compass icon-sm text-danger"></i>
                              <p class="mb-0 ml-1">
                                24 de Febreo 2019
                              </p>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                              <i class="mdi mdi-compass icon-sm text-danger"></i>
                              <p class="mb-0 ml-1">
                                S/ 200.00
                              </p>
                          </div>
                        
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Registros</p>
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">40</h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                       <div class="btn-group" role="group" aria-label="First group">
                       <a href="<?php SERVERURL;?>sesioncurso"><button type="button" class="btn btn-success"><i class="fa fa-star-o"></i> Disponible</button></a>
                        <a href="http://"><button type="button" class="btn btn-dark"><i class="fa fa-eye"></i> Ver</button></a>
                          </div>
                      </div>
                    
                    </div>
                    
                  
                    <p class="text-muted mt-3 mb-0">
                      <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Usuario1: hace 46 minutes
                    </p>
                  </div>
                </div>
              </div>
            <!--fin formato un curso-->

            <!--un formato 2 curso-->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="text-center">Derecho Penal</h4>
                      <div class="float-left">
                        <div class="d-flex flex-row align-items-center">
                            <i class="mdi mdi-compass icon-sm text-danger"></i>
                              <p class="mb-0 ml-1">
                                25 de Marzo 2019
                              </p>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                              <i class="mdi mdi-compass icon-sm text-danger"></i>
                              <p class="mb-0 ml-1">
                                S/ 200.00
                              </p>
                          </div>
                        
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Registros</p>
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">57</h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <button type="button" class="btn btn-danger btn-fw"> <i class="fa fa-lock"></i>  Ocupado</button>
                      </div>
                      <div class="col-md-6">
                      <button type="button" class="mb-0 btn btn-dark btn-fw">Ver</button>
                      </div>
                    </div>
                    
                  
                    <p class="text-muted mt-3 mb-0">
                      <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Usuario1: hace 46 minutes
                    </p>
                  </div>
                </div>
              </div>
            <!--fin formato un curso-->

          </div>
<!--fin cursos-->