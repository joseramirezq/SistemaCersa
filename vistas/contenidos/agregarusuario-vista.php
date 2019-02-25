<!--titulo del curso-->
<div class="row ">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="text-primary">Agregar Usuario</h3>
            </div>
        </div>
    </div>
</div>



<!--formulario de configuracion para el cliente-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"> Verifique todos los datos ingresados antes de confirmar</h1>
                <hr>

                <form class="forms-sample">
                    <div class="row">
                        <div class="col-md-4">
                            <!--nombre/apellidos/correo-->

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="exampleInputEmail1">Nombres</label>
                                    <input type="text" class="form-control" id="" placeholder="Nombre">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="exampleInputPassword1">Apellidos</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Apellidos">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Correo</label>
                                <input type="email" class="form-control" id="exampleInputPassword1"
                                    placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Teléfono</label>
                                <input type="text" class="form-control" id="" placeholder="Telefono">
                            </div>
                        </div>

                        <!--cargo/usuario/contraseña-->
                        <div class="col-md-4">

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
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Contraseña">
                            </div>
                        </div>

                        <!--permisos-->
                        <div class="col-md-4">

                            <h4>Permisos</h4>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Permiso 1
                                            <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Permiso 2
                                            <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Permiso 3
                                            <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Permiso 4
                                            <i class="input-helper"></i></label>
                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group">
                            <a href="index.php" class="btn btn-success"><i class="fa fa-check"></i> Agregar</a>
                            <a href="index.php" class="btn btn-info"><i class="fa fa-meh-o"></i> Cancel</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
<!--fin del formulario para configuracion del cliente-->