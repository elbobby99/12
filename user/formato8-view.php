<h1>Solicitud de adquisicion de computadora</h1>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="panel panel-success">
        <div class="panel-heading text-center"><strong>Para poder Enviar  debes de llenar todos los campos de este formulario</strong></div>
        <div class="panel-body">
            <form role="form" action="./process/enviarfor8.php" method="POST">
            <div class="form-group">
              <label><i class="fa fa-calendar"></i>&nbsp;fecha </label>
              <input type="date" class="form-control"  name="fecha"  placeholder="" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Nombre de la persona a la cual se Asignara el equipo</label>
              <input type="text" class="form-control" name="nom_complete_reg" placeholder="Nombre completo" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-email"></i>&nbsp;Correo</label>
              <input type="text" class="form-control" name="email" placeholder="juan" required="">
            </div>
            <div class="form-group">
              <label class="control-label"><i class="fa fa-user"></i>&nbsp;Explique  por que se requiere un equipo de computo </label>
              <input type="text" id="input_user" class="form-control" name="Explica" placeholder="mi equipo esta fallando" required="" >
              <div id="com_form"></div>
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp;Este Equipo  requiere  alguna  caracteristica adicional  o software especial:(si/no)</label>
              <label><i class></i>&nbsp;En caso de responder  si escriba cual o cuales son:</label>
              <input type="text" class="form-control" name="equipo_requiere" placeholder="escriba aqui" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp;Aqui  solo escriba(aqui va  el nombre de la persona y/o puesto de la persona  encargada  de autorizar la compra)</label>
              <input type="text" class="form-control" name="nombre_persona_pues" placeholder="escriba el nombre" required="">
              <label></i>&nbsp;se autorizo (si/no)(EN caso de marcar  no escriba la razon</label>
              <input type="text" class="form-control" name="caso" placeholder="si/no  y razon" required="">
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