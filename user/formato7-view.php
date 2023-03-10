<h1>formato de entrega de equipo de computo</h1> 
<div class="row">
    <div class="col-sm-8">
      <div class="panel panel-success">
        <div class="panel-heading text-center"><strong>Para poder Enviar  debes de llenar todos los campos de este formulario</strong></div>
        <div class="panel-body">
            <form role="form" action="./process/enviarfor7.php" method="POST">
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Nombre de la persona asignada al equipo</label>
              <input type="text" class="form-control" name="nom_complete_reg" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
            </div>
            <div class="form-group">
              <label><i class="fa fa-calendar"></i>&nbsp;fecha </label>
              <input type="date" class="form-control"  name="fecha"  placeholder="" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-email"></i>&nbsp;Correo</label>
              <input type="text" class="form-control" name="email" placeholder="juan" required="">
            </div>

            <h2>Informacion del equipo</h2>
            <div class="form-group has-success has-feedback">
              <label class="control-label"><i class="fa fa-user"></i>&nbsp;nombre del fabricante</label>
              <input type="text" id="input_user" class="form-control" name="nom_fabri" placeholder="Nombre del fabricante" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo7 maximo 15 caracteres" maxlength="20">
              <div id="com_form"></div>
            </div>
            <div class="form-group">
              <label><i class="fa fa-key"></i>&nbsp;modelo del equipo</label>
              <input type="text" class="form-control" name="modelo" placeholder="modelo equipo" required="">
            </div>
            
            <div class="form-group">
              <label><i class="fa fa-calendar "></i>&nbsp;Fecha de entrega </label>
              <input type="date" class="form-control"  name="Fecha_En"  placeholder="" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp;Tipo de equipo </label>
              <input type="text" class="form-control"  name="Tipo_Eqp"  placeholder="laptop/escritorio" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp;Sistema operativo instalado </label>
              <input type="text" class="form-control"  name="Siste_op"  placeholder="laptop/escritorio" required="">
            </div>
            
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp;Accesorios entregados</label>
              <input type="text" class="form-control"  name="Accesorios"  placeholder="Cargador,mouse , etc" required="">
            </div>
            
            <div class="form-group">
              <label><i class="fa fa-tag "></i>&nbsp;Observaciones del equipo: </label>
              <input type="text" class="form-control"  name="Observacion"  placeholder="escribe aqui" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-envelope"></i>&nbsp;yo<input type="text" class="form-control"  name="recibo"  placeholder="escribe tu nombre" required=""><p>recibo el equipo de c??mputo con las especificaciones en este formato, por lo que compruebo todo lo que viene aqu?? especificado a si tambi??n me comprometo a cumplir las reglas de uso que se enlistan:</p></label>
                      <li>No mantener el equipo encendido cuando no se est?? usando </li>
                      <li>Mantener antivirus/firewall encendido en todo momento </li>
                      <li>Mantenerlo solo en el ??rea de trabajo asignada  </li>
                      <li>En caso de una falla o problema se deber?? notificar al encargado del ??rea de sistemas </li>
              <p>En caso de no cumplir alguna de estas reglas se me aplicara una falta administrativa  </p>
            </div>
            <div class="form-group">
              <label><i class="fa fa-tag"></i>&nbsp; Nombre y firma  de la persona asignada al equipo</label>
              <input type="text" class="form-control"  name="nombre_firma"  placeholder="escribe tu nombre completo" required="">
            </div>
            <div>
        
              <h1>LINEAMIENTOS DEL USO CORRECTO DE EQUIPO DE COMPUTO</h1>
              <h2>Lineamientos de Uso </h2>
                  <li>El usuario deber?? reportar en forma inmediata a el encargado en el ??rea de Inform??tica, cuando detecten que existan riesgos reales o potenciales para equipos de c??mputo o comunicaciones, como pueden ser fugas de agua, conatos de incendios u otros. </li>
                  <li>El usuario tiene la obligaci??n de proteger las memorias USB, tarjetas de memorias, discos externos, computadoras y dispositivos port??tiles que se encuentren bajo su resguardo, aun cuando no se utilicen y contengan informaci??n reservada o confidencial. </li>
                  <li>Es responsabilidad del usuario evitar en todo momento la fuga de informaci??n que se encuentra almacenada en los equipos de c??mputo personal que tenga asignados.</li>
              <h2>Seguridad de ??reas de trabajo.  </h2>
                  <li>Los Sites de Comunicaciones y datos de la Servicios de DYA Manufacturas son ??reas restringidas, por lo que s??lo el personal autorizado por la empresa podr?? acceder a ellos. Protecci??n y ubicaci??n de los Equipos.</li> 
             	    <li> usuario no deber?? mover o reubicar los equipos de c??mputo o de telecomunicaciones, instalar o desinstalar dispositivos, ni retirar candados o cintas de seguridad sin autorizaci??n del jefe del ??rea de Inform??tica, debi??ndose solicitar a la misma en caso de requerir este servicio.</li> 
	                <li>Ser?? responsabilidad del usuario solicitar la capacitaci??n necesaria para el manejo de las herramientas inform??ticas existentes en el equipo asignado, a fin de evitar riesgos por mal uso y para aprovechar al m??ximo las mismas.</li>
              <h2>Mantenimiento de equipo.  </h2>
                  <li>Queda prohibido que el usuario abra o desarme los equipos de c??mputo ya que es necesario contar con las habilidades t??cnicas para poder realizar cualquier diagn??stico reparaci??n, ??nicamente el personal autorizado del jefe del ??rea de Inform??tica podr?? llevar a cabo los servicios y reparaciones al equipo inform??tico</li>
              <h2>Uso de dispositivo especiales </h2> 
                  <li>El uso de los grabadores de discos compactos es exclusivo para respaldos de informaci??n que por su volumen as?? lo justifiquen.</li> 
                  <li>La asignaci??n de este tipo de equipo ser?? previa justificaci??n por escrito y autorizaci??n del titular o jefe inmediato correspondiente.</li> 
                  <li>El usuario que tenga bajo su resguardo este tipo de dispositivos ser?? responsable del buen uso que se le d??.</li>

              <h2>Uso prohibido </h2>
              <p>El uso de cualquier PC, laptop, medio de almacenamiento de datos, etc. de uso personal dentro de las instalaciones del organismo debe estar autorizado.</p> 
              <p>Los usuarios no deber??n utilizar los servicios de Internet o de correo electr??nico de DYA Manufacturas para ver, descargar, guardar, recibir o enviar material relativo a o incluyendo:</p> 
              <li>	Material pornogr??fico.</li> 
              <li>Fomentar la discriminaci??n basada en la etnia, sexo, nacionalidad, edad, estado civil, orientaci??n sexual, religi??n o discapacidad</li> 
              <li>Comportamiento amenazante o violento</li> 
              <li>Actividades ilegales </li>
              <li>Juegos de apuestas</li> 
              <li>	Reenv??o de ???cadenas??? por correo electr??nico</li> 
              <li>	Env??os masivos de correos electr??nicos no solicitados desde una cuenta o de equipo de DYA Manufacturas</li>


            </div>

            
            <button type="submit" class="btn btn-danger">Enviar formulario</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-sm-4 text-center hidden-xs">
      <img src="img/devolucion.JFIF" class="img-responsive" alt="Image">
      <h2 class="text-primary">??Gracias! Por preferirnos</h2>
    </div>

  </div>
</div>