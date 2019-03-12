<!--titulo del curso-->
<div class="row ">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="text-primary">Permisos
          <div class="btn-group dropdown float-right">
            <a href="cursonuevo.php"><button type="button" class="btn btn-success  btn-sm">
                <i class="fa fa-plus"></i> Agregar nuevo
              </button>
            </a>

          </div>
        </h3>
      </div>
    </div>
  </div>
</div>

<!--tabla de liosta de clientes-->
<!--tabla de liosta de clientes-->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Estado</h4>
                <hr>

                <div class="table-responsive">
                    <table class="table table-hover" id="bootstrap-data-table"
                    class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                
                                <th>Editar</th>
                                <th>Eliminar</th>
                                 <th>Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--resgistro de un alumno-->
                            <tr>
                                <td>ES001</td>
                                <td>Prematricula</td>
                                <td>Esta persona es nueva</td>
                                
                                <td>
                                 <button type="button" class="btn btn-warning btn-sm" aria-haspopup="true" aria-expanded="false"
                                    data-toggle="modal" data-target="#nusereditar">
                                    <i class="fa fa-pencil"></i> Editar
                                  </button>
                                </td>
                                <td>
                                <button type="button" class="btn btn-danger btn-sm" aria-haspopup="true" aria-expanded="false"
                                    data-toggle="modal" data-target="#nusereliminar">
                                    <i class="fa fa-trash-o"></i> Eliminar
                                  </button>
                                </td>
                                <td>
                                <button type="button" class="btn btn-dark btn-sm" aria-haspopup="true" aria-expanded="false"
                                  data-toggle="modal" data-target="#nuserdetalle">
                                  <i class="fa fa-drivers-license-o"></i> Ver
                                </button>
                                </td>
                            </tr>
                            <!--fin de registro de un alumno-->



                            <!--fin de registro de un alumno-->


                            <!--fin de registro de un alumno-->



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<!--NoDALES-->

<!--Eliminar-->

<div class="modal fade" id="nusereliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header bg-danger text-center">
        <h4 class="text-light text-center">
          <button class="btn btn-icons btn-rounded btn-light"><i class="fa fa-exclamation text-danger"></i></button>

          ¿Esta seguro de eliminar al Usuario 1?</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">×</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body bg-center">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 form-group">
            <a href="" class="btn btn-success"><i class="fa fa-check"></i> Aceptar</a>
            <button class="btn btn-info"><i class="fa fa-meh-o"></i> Cancel</button>
          </div>
          <div class="col-md-2"></div>
        </div>

      </div>
    </div>
  </div>
</div>

<!--Editar-->

<div class="modal fade" id="nusereditar" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header bg-warning text-center">
          <h4 class="text-light text-center">
            <button class="btn btn-icons btn-rounded btn-light"><i class="fa fa-pencil text-warning"></i></button>       
  
            Editar al usuario :70212063 </h4>
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-white">×</span>
          </button>
        </div>

      <!--Body-->
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title"> Verifique todos los datos ingresados antes de confirmar</h1>
            <hr>

            <form class="forms-sample">
              <div class="row">

                <!--nombre/apellidos/correo-->

                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" id="" placeholder="Nombre">
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="exampleInputPassword1">Apellidos</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apellidos">
                  </div>


                  <div class="col-md-6 form-group">
                    <label for="exampleInputPassword1">Correo</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Correo">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1">Teléfono</label>
                    <input type="text" class="form-control" id="" placeholder="Telefono">
                  </div>
                </div>


                <!--cargo/usuario/contraseña-->
                <div class="col-md-6">

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Cargo</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                      <option value="">Telemarket</option>
                      <option value="">Gerente</option>
                      <option value="">Administrador</option>
                      <option value="">Cargo 4</option>
                      <option value="">Cargo 5</option>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Usuario</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="DNI">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                  </div>
                </div>

                <!--permisos-->
                <div class="col-md-6">

                  <h4>Permisos</h4>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Permiso 1
                          <i class="input-helper"></i><i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Permiso 2
                          <i class="input-helper"></i><i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Permiso 3
                          <i class="input-helper"></i><i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Permiso 4
                          <i class="input-helper"></i><i class="input-helper"></i></label>
                      </div>

                    </div>
                  </div>


                </div>

              </div>
              <div class="row">
                <div class="form-group">
                  <a href="index.php" class="btn btn-success"><i class="fa fa-check"></i> Actualizar</a>
                  <a href="index.php" class="btn btn-info"><i class="fa fa-meh-o"></i> Cancel</a>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--mas informacion-->

<div class="modal fade" id="nuserdetalle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header bg-dark">
        <h4 class="text-light text-center">Usuario :Jose Luis Ramirez</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">×</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <address class="">
                  <p class="font-weight-bold">
                   Cargo
                  </p>
                  <p class="mb-2">
                    Telemarket
                  </p>
                  <p class="font-weight-bold">
                    Correo
                  </p>
                  <p>
                    jlramirezq@gmail.com
                  </p>
                </address>
              </div>


              <div class="col-md-6">
                <address class="">
                  <p class="font-weight-bold">
                    Telefono
                  </p>
                  <p class="mb-2">
                    964923450
                  </p>
                  <p class="font-weight-bold">
                    Usuario
                  </p>
                  <p>
                    70212063
                  </p>
                </address>
              </div>


              <div class="col-md-6">
                <address class="">
                  <p class="font-weight-bold">
                    Permiso
                  </p>
                  <p class="mb-2">
                   <ul>
                     <li>permiso 1</li>
                     <li>permiso 2</li>
                     <li>permiso 3</li>
                     <li>permiso 4</li>
                   </ul>
                  </p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>