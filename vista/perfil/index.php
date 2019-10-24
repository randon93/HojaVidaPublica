<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="CSS/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
  <title>Hoja De Vida Publica - UFPS</title>
</head>

<body>

  <header>
    <div class="inicio">
      <div class="contenedor">
        <div class="iconos">
          <img src="IMG/colombia.png" alt="">
          <img src="IMG/ufps.png" alt="">
        </div>
        <div class="titulos">
          <ul>
            <li>Formato Unico UFPS</li>
            <li>
              <h1> HOJA DE VIDA </h1>
            </li>
            <li>Persona Natural</li>
          </ul>
        </div>
        <div class="entidad-res">
          <ul>
            <li>Entidad responsable</li>
            <li> <input type="text" name="" value=""> </li>
          </ul>
        </div>
      </div>
    </div>
  </header>


  <main>
    <section id="datosPersonales">
      <form action="<?php echo constant('URL');?>login/persona" method="post">
      <div class="contenedor">
        <h2> 1 - Datos Personales</h2>
        <div class="contenedor-datos">
          <div class="datos resaltar">
            <div class="">
              <label for="">Primer Apellido: </label>
            </div>
            <div class="">
              <input type="text" name="apellidoUno" value="<?php 
              if(isset($_SESSION['PERSONA'])){
                  echo $_SESSION['PERSONA']['apellidoUno'];
              }
              
               ?>">
            </div>
          </div>
          <div class="datos resaltar">
            <div class="">
              <label for="">Segundo Apellido: </label>
            </div>
            <div class="">
              <input type="text" name="apellidoDos" value="<?php 
              if(isset($_SESSION['PERSONA'])){
                  echo $_SESSION['PERSONA']['apellidoDos'];
              }              
               ?>">
            </div>
          </div>
          <div class="datos resaltar">
            <div class="">
              <label for="">Nombre: </label>
            </div>
            <div class="">
              <input type="text" name="nombre" value="<?php 
              if(isset($_SESSION['PERSONA'])){
                  echo $_SESSION['PERSONA']['nombre'];
              }              
               ?>">
            </div>
          </div>
          <div class="datos resaltar">
            <div class="">
              <label for="">Documentode Identificacion: </label>
            </div>
            <div class="">
              <label for="">C.C </label>
              <?php 
              if(isset($_SESSION['PERSONA'])){
                  if($_SESSION['PERSONA']['tipoDoc'] == 0){
                   echo '<input type="checkbox" name="tipoDoc" value="0" checked>';
                  } else{
                    echo '<input type="checkbox" name="tipoDoc" value="0">';
                  }
              }              
               ?>              
              <label for="">C.E </label>
              <?php 
              if(isset($_SESSION['PERSONA'])){
                  if($_SESSION['PERSONA']['tipoDoc'] == 1){
                   echo '<input type="checkbox" name="tipoDoc" value="1" checked>';
                  } else{
                    echo '<input type="checkbox" name="tipoDoc" value="1">';
                  }
              }              
               ?> 
              <label for="">PAS </label>
              <?php 
              if(isset($_SESSION['PERSONA'])){
                  if($_SESSION['PERSONA']['tipoDoc'] == 2){
                   echo '<input type="checkbox" name="tipoDoc" value="2" checked>';
                  } else{
                    echo '<input type="checkbox" name="tipoDoc" value="2">';
                  }
              }              
               ?> 
              <label for="">No. </label>
              <input type="text" name="documento" value="<?php 
              if(isset($_SESSION['PERSONA'])){
                  echo $_SESSION['PERSONA']['documento'];
              }              
               ?>">
            </div>
          </div>
          <div class="datos resaltar">
            <div class="">
              <label for="">Sexo: </label>
            </div>
            <div class="">
              <label for="">M: </label>
              <?php 
              if(isset($_SESSION['PERSONA'])){
                  if($_SESSION['PERSONA']['sexo'] == 1){
                   echo '<input type="checkbox" name="genero" value="1" checked>';
                  } else{
                    echo '<input type="checkbox" name="genero" value="1">';
                  }
              } else{
                echo '<input type="checkbox" name="genero" value="1" >';
              }             
               ?> 
              <label for="">F: </label>
              <?php 
              if(isset($_SESSION['PERSONA'])){
                  if($_SESSION['PERSONA']['sexo'] == 0){
                   echo '<input type="checkbox" name="genero" value="0" checked>';
                  } else{
                    echo '<input type="checkbox" name="genero" value="0">';
                  }
              }  else{
                echo '<input type="checkbox" name="genero" value="0" >';
              }            
               ?> 
            </div>
          </div>
          <div class="datos resaltar">
            <div class="">
              <label for="">Nacionalidad: </label>
            </div>
            <div class="">
              <label for="">Col: </label>
              <?php 
              if(isset($_SESSION['PERSONA'])){
                  if($_SESSION['PERSONA']['nacionalidad'] == 0){
                   echo '<input type="checkbox" name="nacionalidad" value="0" checked>';
                  } else{
                    echo '<input type="checkbox" name="nacionalidad" value="0">';
                  }
              }              
               ?> 
              <label for="">Extranjero: </label>
              <?php 
              if(isset($_SESSION['PERSONA'])){
                  if($_SESSION['PERSONA']['nacionalidad'] > 0){
                   echo '<input type="checkbox" name="nacionalidad" value="1" checked>';
                  } else{
                    echo '<input type="checkbox" name="nacionalidad" value="1">';
                  }
              }              
               ?> 
              <label for="">Pais: </label>
              <input type="text" name="pais" value="<?php 
              if(isset($_SESSION['PERSONA'])){
                  echo $_SESSION['NACIONALIDAD'];
              }              
               ?>">
            </div>
          </div>
          <div class="datos-d resaltar">
            <div class="">
              <h3>Fecha y Lugar de Nacimiento</h3>
            </div>
            <div class="">
              <ul>
                <li>
                  <label for="">Fecha: </label>
                  <input type="date" name="fechaNacimiento" value="">
                </li>
                <li>
                  <label for="">Pais</label>
                  <input type="text" name="paisN" value="<?php echo $_SESSION["NACIONALIDAD"];?>">
                </li>
                <li>
                  <label for="">Dpto</label>
                  <input type="text" name="" value="">
                </li>
                <li>
                  <label for="">Mpio</label>
                  <input type="text" name="" value="">
                </li>
              </ul>
            </div>
          </div>
          <div class="datos-d resaltar">
            <div class="">
              <h3>Direccion de Correspondencia </h3>
            </div>
            <div class="">
              <ul>
                <li>
                  <label for="">Correo</label>
                  <input type="text" name="correo" value="<?PHP 
                  if(isset($_SESSION["PERSONA"])){
                    echo $_SESSION["PERSONA"]['correo'];
                  }
                  ?>">
                </li>
                <li>
                  <label for="">Pais</label>
                  <input type="text" name="paisD" value="<?PHP 
                  if(isset($_SESSION["NACIONALIDAD"])){
                    echo $_SESSION["NACIONALIDAD"];
                  }
                  ?>">
                </li>               
                <!-- <li>
                  <label for="">Telefono</label>
                  <input type="text" name="telefono" value="">
                </li> -->
                <li>
                  <label for="">Telefono</label>
                  <input type="text" name="telefono" value="<?PHP 
                  if(isset($_SESSION["PERSONA"])){
                    echo $_SESSION["PERSONA"]['telefono'];
                  }
                  ?>">
                </li>
              </ul>
            </div>
          </div> <input type="submit" value="GUARDAR DATOS PERSONALES">
        </div>
      </div>     
      </form>
    </section>

    <section id="infoAcademica">
      <div class="contenedor">
        <h2>2 - Informacion Academica</h2>
        <div class="contenedor-datos">
          <div class="datos-u resaltar">
            <div>
              <h3>Educacion Basica y Media</h3>
              <!-- <p>Marque con una X el ultimo grado aprobado( Los frados 1 a 6 de bachiderato equivalen a los grados 6 a
                11 de educacion
                basica secundaria y media ) </p> -->
            </div>
            <div>
              <form action="<?php echo constant('URL');?>login/basica" method="post">
                <input type="text" name="ccB" value="<?php echo $_SESSION["PERSONA"]['documento'] ?>" class="none" style="display:none">                
                 <DIV class="contenido">   
                  <h3>Nueva Informacion de Educacion</h3>
                  <ul>
                    <li>
                      <label for=""> Cursó: </label>                  
                      <select name="curso" id="grados">
                        <option value="" selected>-- SELCCIONE --</option>
                        <option value="Educacion Inicial">Educacion Inicial</option>
                        <option value="Educacion Inicial">Educacion Prescolar</option>
                        <option value="Educacion Inicial">Educacion Basica</option>
                        <option value="Educacion Inicial">Educacion Media</option>
                        <option value="Educacion Inicial">Educacion Superior</option>                        
                      </select>
                    </li>
                    <li>
                      <label for=""> Titulo Obtenido: </label>
                      <input type="text" name="titulo" id="">
                    </li>
                    <li>
                      <label for="">Fecha de Grado: </label>
                      <input type="date" name="fechaGrado">
                    </li>
                    <li>
                      <label for="">Institucion </label>
                      <input type="Text" name="Institucion">
                    </li> 
                </ul>
                <ul>                   
                    <li>
                      <div>
                        <label for=""> Detalles: </label>
                      </div>
                      <div>
                        <textarea  class="fijo"></textarea>
                      </div>
                    </li>
                </ul>
                <input type="submit" value="GUARDAR EDUCACION">
              </form> 
              </DIV>           
                  <?php                   
                      if ( isset($_SESSION['BASICA'][0]) ) {  $cont =  count($_SESSION['BASICA']);                    
                        for ($i=1; $i <= count($_SESSION['BASICA']) ; $i++) { ?>
                        <div class="contenido">
                          <div style="border:outset;margin: 10px; padding-botton:15px;">
                          <h3>INFORMACION EDUCATIVA # <?PHP ECHO $cont;?></h3>
                          <ul>
                            <li>  
                              <div> 
                                <label for="">Grado:</label>
                                <input name="" type="text" value="<?php echo $_SESSION["BASICA"][count($_SESSION["BASICA"])-$i]['curso'];?>" disabled>
                              </div>
                            </li>
                            <li>
                              <div>
                                <label for=""> Titulo Obtenido: </label>
                                <input type="text" name="" value="<?php echo $_SESSION["BASICA"][count($_SESSION["BASICA"])-$i]['titulo'];?>" disabled>
                              </div>
                            </li>
                            <li>
                              <div>
                              <label for="">Fecha de Grado: </label>
                              <input type="text" name="" value="<?php echo $_SESSION["BASICA"][count($_SESSION["BASICA"])-$i]['fechaGrado'];?>" disabled>
                              </div>
                            </li>
                           </ul>
                           <ul>                   
                              <li>
                                <div>
                                 <label for=""> Detalles: </label>
                                </div>
                                <div>
                                  <textarea  class="fijo" disabled></textarea>
                                </div>
                              </li>
                           </ul>
                            </div>
                          </div>
                      <?php $cont--;}
                      }
                    ?>  
                    </ul>                 
            </div>
          </div>
          <!-- <div class="datos-u resaltar">
            <div>
              <h3>Educacion Superior (Pregrado y Postgrado)</h3>
              <p>Diligencie este pinto en estricto orden cronologico, en modalidad academica escriba:
                <b>TC:</b> (Tecnica)
                <b>ES:</b> (Especializacion)
                <b>TL:</b> (Tecnologia)
                <b>MG:</b> (Mestria o Msgister)
                <b>TE:</b> (Tecnologia especializada)
                <b>DOC:</b> (Doctorado o PHD)
                <b>UN:</b> (Universitaria)
                Relacione al frente el numero de la tarjeta profesional (si esta ha sido prevista en una ley).
              </p>
            </div>
            <div>
              <TABLE BORDER>
                <TR>
                  <TH ROWSPAN=2>Modalidad Academica</TH>
                  <TH ROWSPAN=2>No. Semestre Aprobados</TH>
                  <TH colspan=2>Graduado</TH>
                  <TH rowspan=2>Nombre de los Estudios O Titulo Obtenido</TH>
                  <TH colspan=2>Terminacion</TH>
                  <TH rowspan=2>No. Numero de tarjeta profesional</TH>
                </TR>
                <TR>
                  <TH>SI</TH>
                  <TH>NO</TH>
                  <th>MES</th>
                  <th>AÑO</th>
                </TR>
                <TR>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <td>algo</td>
                </TR>
                <TR>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <td>algo</td>
                </TR>
                <TR>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <td>algo</td>
                </TR>
                <TR>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <td>algo</td>
                </TR>
                <TR>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>algo</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <TD>ALGO</TD>
                  <td>algo</td>
                </TR>
              </TABLE>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section id="">
      <div class="contenedor">
        <h2>3 - Experiencia Laboral</h2>
        <div class="contenedor-datos">
          <div class="datos-u resaltar" id="padre">
            <div>
            <form action="<?php echo constant('URL');?>login/experiencia" method="post">
            <input type="text" name="ccE" value="<?php echo $_SESSION["PERSONA"]['documento'] ?>" class="none" style="display:none">
                <p>Relacione su Experiencia laboral o de prestacion de serivicios en estricto
                  orden cronologico comenzando por el mas actual.</p>
              </div>
              <div class="contenido">
               <h3>Nueva Experiencia o Empleo Actual</h3>     
                 <ul>
                  <li>
                    <div>
                      <label for="">Empresa o Entidad</label>
                      <input type="text" name="empresa">
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">publica</label>
                      <input type="checkbox" name="tipoExp" value="1" >
                      <label for="">Privada</label>
                      <input type="checkbox" name="tipoExp" value="0" >
                    </div>
                  </li>
                  <li>
                    <div>
                      <select name="paisE" id="">
                        <option value="colombia">colombia</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Estado unidos">Estado unidos</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Rusia">Rusia</option>
                        <option value="China">China</option>
                      </select>
                    </div>
                  </li>
                </ul>
                <ul>
                  
                </ul>
                <ul>
                  <li>
                    <div>
                      <label for="">Fecha de Ingeso</label>
                      <input type="date" name="fechaIngresoExp" id="">
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">Fecha de Retiro</label>
                      <input type="date" name="fechaRetiroExp" id="">
                    </div>
                  </li>
                </ul>
                <ul>
                  <li>
                    <div>
                      <label for="">Cargo o Contrato Actual</label>
                      <input type="text" name="cargoExp" id="">
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">Dependencia</label>
                      <input type="text" name="dependenciaExp" id="">
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">Direccion</label>
                      <input type="text" name="direccionExp" id="">
                    </div>
                  </li>
                </ul>
                </div> <button id="" >Guardar Experiencia</button> 
            </form>
                <?PHP if (isset($_SESSION['EMPLEOACTUAL'][0])) {
                  for ($i=0; $i < count($_SESSION['EMPLEOACTUAL']) ; $i++) { ?> 
                    <div class="contenido">
                  <div style="border:outset;margin: 10px;">
                  <h3>Experiencia # <?php  echo $i+1; ?></h3>                           
                <ul>
                  <li>
                    <div>
                      <label for="">Empresa o Entidad</label>
                      <input type="text" name="" VALUE="<?php echo $_SESSION['EMPLEOACTUAL'][$i]['empresa'];?>" disabled>
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">publica</label>
                      <input type="checkbox" name="" value="1" >
                      <label for="">Privada</label>
                      <input type="checkbox" name="" value="0" >
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">Pais: </label>
                      <input type="text" name=""  VALUE="<?php echo $_SESSION['EMPLEOACTUAL'][$i]['pais'];?>" disabled>
                    </div>
                  </li>
                </ul>
                <ul>
                </ul>
                <ul>
                  <li>
                    <div>
                      <label for="">Fecha de Ingeso</label>
                      <input type="text" name="fechaIngresoExp" VALUE="<?php echo $_SESSION['EMPLEOACTUAL'][$i]['fechaIngreso'];?>" disabled>
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">Fecha de Retiro</label>
                      <input type="text" name="fechaRetiroExp" VALUE="<?php echo $_SESSION['EMPLEOACTUAL'][$i]['fechaRetiro'];?>" disabled>
                    </div>
                  </li>
                </ul>
                <ul>
                  <li>
                    <div>
                      <label for="">Cargo o Contrato </label>
                      <input type="text" name="cargoExp" VALUE="<?php echo $_SESSION['EMPLEOACTUAL'][$i]['cargo'];?>" disabled>
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">Dependencia</label>
                      <input type="text" name="dependenciaExp" VALUE="<?php echo $_SESSION['EMPLEOACTUAL'][$i]['dependencia'];?>" disabled>
                    </div>
                  </li>
                  <li>
                    <div>
                      <label for="">Direccion</label>
                      <input type="text" name="direccionExp" VALUE="<?php echo $_SESSION['EMPLEOACTUAL'][$i]['direccion'];?>" disabled>
                    </div>
                  </li>
                </ul> 
                </div></div>
                <?PHP }} ?> 
              
          </div>
          <!-- <button id="btn_agregar" onclick="crearDin()">Mas Exp.</button> -->
        </div>
      </div>
    </section>
  </main>

  <script>
    function crearDin() {

      var padre = document.getElementById("padre");
      var divPadre = document.createElement("div");
      var h3 = document.createElement("h3");
      h3.textContent = "CARGO O CONTRATO ANTERIOR";
      divPadre.appendChild(h3);
      var aux = "";

      for (let index = 0; index < 13; index++) {

        var ul = document.createElement("ul");
        var input = document.createElement("input");
        var label = document.createElement("label");
        var div = document.createElement("div");
        var li = document.createElement("li");
        if (index < 1) {
          label.textContent = "Empresa o Entidad";
          input.type = "text";
          aux = ul;
        } else if (index == 1) {
          label.textContent = "Publica";
          input.type = "text";
        } else if (index == 2) {
          label.textContent = "Privada";
          input.type = "text";
        } else if (index == 3) {
          label.textContent = "Pais";
          input.type = "text";
        } else if (index == 4) {
          label.textContent = "Departamento";
          input.type = "text";
          aux = ul;
        } else if (index == 5) {
          label.textContent = "Municipio";
          input.type = "text";
        } else if (index == 6) {
          label.textContent = "Correo Electronico";
          input.type = "text";
        } else if (index == 7) {
          label.textContent = "Telefonos";
          input.type = "text";
          aux = ul;
        } else if (index == 8) {
          label.textContent = "Fecha de Ingreso";
          input.type = "text";
        } else if (index == 9) {
          label.textContent = "Fecha de Retiro";
          input.type = "text";
        } else if (index == 10) {
          label.textContent = "Cargo Anterior";
          input.type = "text";
          aux = ul;
        } else if (index == 11) {
          label.textContent = "Dependencia";
          input.type = "text";
        } else if (index == 12) {
          label.textContent = "Direccion";
          input.type = "text";
        }

        div.appendChild(label);
        div.appendChild(input);

        li.appendChild(div);
        aux.appendChild(li);
        divPadre.appendChild(aux);

      }
      divPadre.className = 'contenido';
      padre.appendChild(divPadre);
    }
  </script>

</body>

</html>






 