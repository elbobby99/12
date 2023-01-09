
<h1>reposicion  de equipo informatico</h1> 
<div class="row">
    <div class="col-sm-8">
      <div class="panel panel-success">
        <div class="panel-heading text-center"><strong>Para poder Enviar  debes de llenar todos los campos de este formulario</strong></div>
        <div class="panel-body">
            <form role="form" action="./process/enviarfor6.php" method="POST">
            <div class="form-group">
              <label><i class="fa fa-calendar"></i>&nbsp;fecha </label>
              <input type="date" class="form-control"  name="fecha"  placeholder="" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Nombre del  persona solicitante</label>
              <input type="text" class="form-control" name="nom_soli" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
            </div>
            <div class="form-group">
              <label><i class="fa fa-email"></i>&nbsp;Correo</label>
              <input type="text" class="form-control" name="email" placeholder="juan" required="">
            </div>
            <h2>Informacion del equipo</h2>
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Nombre  equipo</label>
              <input type="text" class="form-control" name="nom_equipo" placeholder="Nombre" required="" >
            </div>
           
            <div class="form-group has-success has-feedback">
              <label class="control-label"><i class="fa fa-user"></i>&nbsp;marca</label>
              <input type="text" id="input_user" class="form-control" name="marca" placeholder="Nombre del fabricante" required="" >
              <div id="com_form"></div>
            </div>
            <div class="form-group">
              <label><i class="fa fa-key"></i>&nbsp;modelo</label>
              <input type="text" class="form-control" name="modelo" placeholder="modelo equipo" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-envelope"></i>&nbsp;funcionalidad</label>
              <input type="text" class="form-control"  name="funcion"  placeholder="Numero IMEI" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-phone "></i>&nbsp;existen piezas</label>
              <input type="text" class="form-control"  name="Existencia"  placeholder="si/no" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp;En caso de responder que no existen piezas en el almacén el encargado de sistemas deberá contestar estas preguntas 
Cual es la prioridad: __Poca                       __Normal                           __Urgente
 </label>
              <input type="text" class="form-control" name="prioridad" placeholder="Poca/Normal/Urgente" >
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp;Cuantas unidades (Piezas) se requieren comprar: </label>
              <input type="number" class="form-control"  name="num_piezas"  placeholder="numero" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp;Justifique el numero de unidades a comprar:  </label>
              <p>Posterior pasar este formato al área de compras para su debido proceso</p>
              <input type="text" class="form-control"  name="jus_Piezas"  placeholder="numero" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-envelope"></i>&nbsp;NOMBRE Y FIRMA  DE LA PERSONA asignada al equipo</label>
              <input type="text" class="form-control"  name="nombre_firma_P"  placeholder="escribe aqui" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-envelope"></i>&nbsp;NOMBRE Y FIRMA   del jefe departamento de sistemas</label>
              <input type="text" class="form-control"  name="nombre_firma_D"  placeholder="escribe aqui" required="">
            </div>
            
            
            

            <button type="submit" class="btn btn-danger">Enviar formulario</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-sm-4 text-center hidden-xs">
      <img src="img/devolucion.JFIF" class="img-responsive" alt="Image">
      <h2 class="text-primary">¡Gracias! Por preferirnos</h2>
    </div>

  </div>
</div>