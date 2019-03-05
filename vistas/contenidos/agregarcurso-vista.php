<!--titulo-->
<div class="row ">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="text-primary">AgregarCurso/Diplomado</h3>
      </div>
    </div>
  </div>
</div>



<!--formulario de registro de un curso-->
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">LLene el formulario completamente</h4>

        <hr>
        <form data-form="save"  action="<?php echo SERVERURL;?>ajax/administradorAjax.php" method="POST" class="forms-sample FormularioAjax" 
                autocomplete="off" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Tipo</label>
              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                <option value="">Curso</option>
                <option value="">Diplomado</option>

              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <label>Nombre</label>
              <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
            </div>

         
            <div class="form-group col-md-4">
                 <label>Fecha Inicio</label>
                  <div class="input-group date border-primary form_date col-md-12 input-group-append" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                      <input class="form-control"  type="text" value="" readonly>
                      <span class="input-group-text bg-transparent">
                         <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                      </span>
                  </div>
           
            </div>



            <div class="form-group col-md-4">
                 <label>Fecha Fin</label>
                  <div class="input-group date border-primary form_date col-md-12 input-group-append" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                      <input class="form-control"  type="text" value="" readonly>
                      <span class="input-group-text bg-transparent">
                         <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                      </span>
                  </div>
           
            </div>

            <div class="form-group col-md-4">
              <label>Duracion</label>
              <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
            </div>
            <div class="form-group col-md-4">
              <label>Horario</label>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            </div>
            <div class="form-group col-md-4">
              <label>Costo</label>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            </div>
            <div class="form-group col-md-4">
              <label>Certificado</label>
              <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
            </div>
            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Modalidad</label>
              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                <option value="">Virtual en Vivo</option>
                <option value="">Virtual </option>
           
              </select>
            </div>
            <div class="form-group col-md-4">
              <label>Docente</label>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            </div>

          </div>
          <!--botones-->
          <div class="row">
            <div class="form-group">
            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Agregar</button>
              <button class="btn btn-info"><i class="fa fa-meh-o"></i> Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>