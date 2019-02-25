<!--Inicio de vista cliente nuevo-->


<!--titulo del curso-->
<div class="row ">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="text-primary">Agregar Cliente</h3>
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

                        <!--telefono/profesion/grado-->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="exampleInputPassword1">Profesión</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Profesion">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Grado</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="grado">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pais</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="pais" value="Perú">
                            </div>
                        </div>

                        <!--departamento/distrito/direccion-->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="exampleInputPassword1">Departamento</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Departamento">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Distrito</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Distrito">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Direccion</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Direccion">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group">
                            <a href="alumnodetalle.php" class="btn btn-success"><i class="fa fa-check"></i> Agregar</a>
                            <button class="btn btn-info"><i class="fa fa-meh-o"></i> Cancel</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
<!--fin del formulario para configuracion del cliente-->


<!--fin  de vista cliente nuevo-->
