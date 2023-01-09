<h1>hoja de verificacion de equipo informatico de computo </h1>
  <div class="row">
    <div class="col-sm-8">
      <div class="panel panel-success">
        <div class="panel-heading text-center"><strong>Para poder Enviar  debes de llenar todos los campos de este formulario</strong></div>
        <div class="panel-body">
            <form role="form" action="./process/enviarfor4.php" method="POST">
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp;Fecha</label>
              <input type="date" class="form-control" name="Fecha" placeholder="" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
            </div>
            
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Nombre de la persona asignada al equipo</label>
              <input type="text" class="form-control" name="nom_complete_reg" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
            </div>
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;ESCRIBE TU CORREO </label>
              <input type="text" class="form-control" name="correo" placeholder="Nombre completo" required="" >
            </div>
            

              <p>Por favor marque con una SI o en un NO respectivamente dependiendo de la pregunta </p>
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;El equipo fue entregado en su empaque/embalaje/caja:</label>
              <input type="text" class="form-control" name="Equipo_entregado" placeholder="SI/NO" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
            </div>
            <div class="form-group has-success has-feedback">
              <label class="control-label"><i class="fa fa-tag"></i>&nbsp;Se me entregaron todos sus accesorios</label>
              <input type="text" id="input_user" class="form-control" name="acessorios" placeholder="SI/NO" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo7 maximo 15 caracteres" maxlength="20">
              <div id="com_form"></div>
            </div>
            /*formularios*/
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp;Se le mostro como se debe usar de forma correcta:</label>
              <input type="text" class="form-control" name="Formacorrecta" placeholder="SI/NO" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp;Se le mostro las medidas de seguridad que se deben de tener</label>
              <input type="text" class="form-control"  name="medidas_seguridad"  placeholder="SI/NO" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp;Se instalaron todo el software para su buen funcionamiento:</label>
              <input type="text" class="form-control"  name="instal_sof"  placeholder="SI/NO" required="">
            </div>
           
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp; Me asignaron contraseña de acceso a el equipo: </label>
              <input type="text" class="form-control"  name="Asigna_pass"  placeholder="SI/NO" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp; Se realizo alguna instalación en el área de trabajo:</label>
              <input type="text" class="form-control"  name="instal_trabajo"  placeholder="SI/NO" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp; En caso de haber respondido NO en algunas preguntas que el encargado de sistemas justifique la respuesta </label>
              <input type="text" class="form-control"  name="justificacion"  placeholder="justificiacion" required="">
            </div>
           
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp; Nombre y firma  de la persona asignada al equipo</label>
              <input type="text" class="form-control"  name="nombre_firma"  placeholder="escribe tu nombre completo" required="">
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