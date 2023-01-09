
<h1>solicitud de  prestamo de  equipo celular</h1>
  <div class="row">
    <div class="col-sm-8">
      <div class="panel panel-success">
        <div class="panel-heading text-center"><strong>Para poder Enviar  debes de llenar todos los campos de este formulario</strong></div>
        <div class="panel-body">
            <form role="form" action="./process/enviarfor3.php" method="POST">
            <div class="form-group">
              <label><i class="fa fa-calendar"></i>&nbsp;fecha </label>
              <input type="date" class="form-control"  name="fecha"  placeholder="" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Nombre de la persona asignada al equipo</label>
              <input type="text" class="form-control" name="nom_complete_reg" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
            </div>
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;ESCRIBE TU CORREO </label>
              <input type="text" class="form-control" name="correo" placeholder="Nombre completo" required="" >
            </div>
            <h2>Informacion del equipo</h2>
            <div class="form-group has-success has-feedback">
              <label class="control-label"><i class="fa fa-user"></i>&nbsp;nombre del fabricante</label>
              <input type="text" id="input_user" class="form-control" name="Nom_fabr" placeholder="Nombre del fabricante" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo7 maximo 15 caracteres" maxlength="20">
              <div id="com_form"></div>
            </div>
            <div class="form-group">
              <label><i class="fa fa-key"></i>&nbsp;modelo del equipo</label>
              <input type="text" class="form-control" name="clave_reg" placeholder="modelo equipo" required="">
            </div>
            
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Numero IMEI</label>
              <input type="text" class="form-control" name="Num_imei" placeholder="Nombre completo" required="" >
            </div>
            <div class="form-group">
              <label><i class="fa fa-phone "></i>&nbsp;Numero de telefono</label>
              <input type="text" class="form-control"  name="tel"  placeholder="Numero tel" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-calendar"></i>&nbsp;fecha entrega</label>
              <input type="date" class="form-control"  name="fecha_entrega"  placeholder="Numerotel" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-envelope"></i>&nbsp;acessorios entregados</label>
              <input type="text" class="form-control"  name="accesorios"  placeholder="escribe aqui" required="">
            </div>
            <div class="form-group">

              <label><i class="fa fa-envelope"></i>&nbsp;yo<input type="text" class="form-control"  name="recibo"  placeholder="escribe tu nombre" required=""><p>recibo el equipo de celular con las especificaciones en este formato, por lo que compruebo todo lo que viene aquí especificado a si también me comprometo a cumplir las reglas de uso que se enlistan.</p></label>
                      <li>No instalar aplicaciones externas a las que ofrece las tiendas oficiales</li>
                      <li>Tener en todo momento instalado el GPS (Esto para en caso de que halla un extravió del equipo sea más rápido la localización)</li>
                      <li>No usarlos en ambientes donde no lo recomiende el fabricante </li>
                      <li>No usar cargadores u adaptadores no autorizados por el fabricante </li>
                    <p>En caso de no cumplir alguna de estas reglas se me aplicara una falta administrativa </p>
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

  </div>
</div>