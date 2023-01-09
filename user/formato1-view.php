
<div class="container">
<h1>Formato devolucion de celular</h1>
  <div class="row">
    <div class="col-sm-8">
      <div class="panel panel-success">
        <div class="panel-heading text-center"><strong>Para poder Enviar  debes de llenar todos los campos de este formulario</strong></div>
        <div class="panel-body">
            <form role="form" action="./process/enviarfor1.php" method="POST">
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Nombre de la persona asignada al equipo</label>
              <input type="text" class="form-control" name="nom_complete_reg" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
            </div>
            
            <h2>Informacion del equipo</h2>
            <div class="form-group">
              <label><i class="fa fa-email"></i>&nbsp;Correo</label>
              <input type="text" class="form-control" name="email" placeholder="juan" required="">
            </div>
            <div class="form-group">
              <label class="control-label"><i class="fa fa-user"></i>&nbsp;nombre del fabricante</label>
              <input type="text" id="input_user" class="form-control" name="Nom_fabr" placeholder="Nombre del fabricante" required="">
              <div id="com_form"></div>
            </div>
            <div class="form-group">
              <label><i class="fa fa-key"></i>&nbsp;modelo del equipo</label>
              <input type="text" class="form-control" name="clave_reg" placeholder="modelo equipo" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-envelope"></i>&nbsp;Numero IMEI</label>
              <input type="text" class="form-control"  name="num_IMEI"  placeholder="Numero IMEI" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-phone "></i>&nbsp;Numero de telefono</label>
              <input type="text" class="form-control"  name="tel"  placeholder="Numerotel" required="">
            </div>
            <h2>Integridad del equipo</h2>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp; el equipo enciende en caso responde "NO" explica el por  que </label>
              <input type="text" class="form-control"  name="encender"  placeholder="si/no y el porque" required="">
            </div>
            
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp; se entrego con accesorios en caso responde "NO" explica el por que </label>
              <input type="text" class="form-control"  name="entrego"  placeholder="si/no y el porque" required="">
            </div>
           
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp; tiene algun daño </label>
              <input type="text" class="form-control"  name="daño"  placeholder="si/no" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp; En caso  de responder "SI"  el daño fue total o parcial y incluir una explicacion</label>
              <input type="text" class="form-control"  name="caso"  placeholder="total o parcial y explicacion" required="">
            </div>
           
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp; Nombre y firma  de la persona asignada al equipo</label>
              <input type="text" class="form-control"  name="nombre_completo"  placeholder="escribe tu nombre completo" required="">
            </div>
            

            <button type="submit" class="btn btn-danger">Enviar formulario</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-sm-4 text-center hidden-xs">
      <img src="img/devolucion.JFIF" class="img-responsive" alt="Image">
      <h2 class="text-primary">¡Gracias! Por llenar este formato</h2>
    </div>

  </div>
</div>