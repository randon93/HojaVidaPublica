<?php /**
 *
 */
class loginModel extends Modelo{

  function __construct()  { //echo "creando login model";
    parent::__construct();
  }

  public function login($user)  { 
      $sql = "SELECT * FROM persona WHERE documento = :cedula";      
      $con = $this->bd->conectar();
      $consulta = $con -> prepare($sql);
      $consulta -> execute( array(":cedula"=>$user) );
      foreach ($consulta as $persona) {
        $_SESSION['PERSONA'] = [ "nombre"=>$persona['nombre'],
                  "apellidoUno"=>$persona['apellidoUno'],
                  "apellidoDos"=>$persona['apellidoDos'],
                  "tipoDoc"=>$persona['tipoDoc'],
                  "documento"=>$persona['documento'],
                  "sexo"=>$persona['sexo'],
                  "nacionalidad"=>$persona['nacionalidad'],
                  "correo"=>$persona['correo'],
                  "telefono"=>$persona['telefono'] 
                ];
        $this->basica($user);
        $this->idiomas($user);
        $this->nacionalidad($user);
        $this->genero($user);
        $this->empleoActual($user);
        return true;
      }   
       return false;
  }
              // METODOS PARA MOSTRAR 
              // INFORMACION DE LA PERSONA 
              // YA REGISTRADA
              
  private function basica($user){
    $sql = "SELECT * FROM basica WHERE persona = :cedula";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute( array(":cedula"=>$user) );
    $array = [];
    foreach ($consulta as $basica) {
      $estudio = [ "fechaGrado"=> $basica['fechaGrado'], 
                   "curso"=>$basica['curso'],
                   "titulo"=>$basica['titulo']
                 ];
      array_push($array, $estudio); 
    }
    $_SESSION['BASICA'] = $array;
  }

  private function idiomas($user){
    $sql = "SELECT i.nombre FROM habla h INNER JOIN persona p ON h.persona = p.documento INNER JOIN idioma i ON h.idioma = i.id WHERE p.documento = :cedula";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute( array(":cedula"=>$user) );
    $idiomas = [];
    foreach ($consulta as $idioma) {
      array_push($idiomas, $idioma['nombre']);
    }
    $_SESSION['IDIOMAS'] = $idiomas;
    
  }

  private function nacionalidad($user){
    $sql = "SELECT pa.nombre as nombre FROM persona p INNER JOIN pais pa ON p.nacionalidad = pa.id WHERE p.documento = :cedula";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute( array(":cedula"=>$user) );
    $idiomas = [];
    foreach ($consulta as $nacionalidad) {
      $_SESSION['NACIONALIDAD'] = $nacionalidad['nombre'];
      break;
    }    
  }

  private function genero($user){
    $sql = "SELECT s.nombre as nombre FROM persona p INNER JOIN sexo s ON p.sexo = s.id WHERE p.documento = :cedula";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute( array(":cedula"=>$user) );    
    foreach ($consulta as $genero) {
      $_SESSION['GENERO'] = $genero['nombre'];
      break;
    }    
  }

  private function empleoActual($user){
    $sql = "SELECT * FROM empleoactual WHERE persona = :cedula";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute( array(":cedula"=>$user) );
    $emp = [];
    foreach ($consulta as $empleos) {
      $aux = [ "empresa"=>$empleos['empresa'], 
                "publica"=>$empleos['publica'],
                "fechaIngreso"=>$empleos['fechaIngreso'], 
                "fechaRetiro"=>$empleos['fechaRetiro'],
                "cargo"=>$empleos['cargo'],
                "dependencia"=>$empleos['dependencia'],
                "direccion"=>$empleos['direccion'] ,
                "pais"=>$empleos['pais']
            ];
      array_push($emp, $aux);
    }
    $_SESSION['EMPLEOACTUAL'] = $emp;
  }

            // METODOS PARA GUARDAS
            // INFORMACION DE UNA PERSONA
            // NO REGISTRADA

  public function basicaN($fecha, $curso, $titulo, $persona){
    $con = $this->bd->conectar();
    
    $sql = "INSERT INTO basica (fechaGrado, curso, titulo, persona) VALUES (:fechaGrado, :curso, :titulo, :persona)";
    $consultar = $con -> prepare($sql);
    $fechaGrado = date("Y/m/d");
    $consultar -> execute( array( ":fechaGrado"=>$fecha, 
                                  ":curso"=>$curso,
                                   ":titulo"=>$titulo,
                                    ":persona"=>$persona  
                                ));
  }

  public function persona($nombre, $apellidoUno, $apellidoDos, $tipoDoc, $documento, $sexo, $nacionalidad, $correo, $telefono){
    $con = $this->bd->conectar();
    $sql = "INSERT INTO persona (nombre, apellidoUno, apellidoDos, tipoDoc, documento, sexo, nacionalidad, correo, telefono) VALUES ( :nombre, :apellidoUno, :apellidoDos, :tipoDoc, :documento, :sexo, :nacionalidad, :correo, :telefono)";
    $consultar = $con -> prepare($sql);
    $consultar -> execute( array ( ":nombre"=>$nombre,
                                    ":apellidoUno"=>$apellidoUno,
                                    ":apellidoDos"=>$apellidoDos,
                                    ":tipoDoc"=>$tipoDoc,
                                    ":documento"=>$documento,
                                    ":sexo"=>$sexo,
                                    ":nacionalidad"=>$nacionalidad,
                                    ":correo"=>$correo,
                                    ":telefono"=>$telefono
                                  ));
    $_SESSION['USER'] = $docuemnto;
  }

  public function empleoActualN($empresa, $publica, $fechaIngreso, $fechaRetiro, $cargo, $dependencia, $direccion, $persona, $pais){
    $con = $this->bd->conectar();
    $sql = "INSERT INTO empleoActual (empresa, publica, fechaIngreso, fechaRetiro, cargo, dependencia, direccion, persona, pais) VALUES (:empresa, :publica, :fechaIngreso, :fechaRetiro, :cargo, :dependencia, :direccion, :persona, :pais)";
    $consultar = $con -> prepare($sql);
    $consultar -> execute( array( ":empresa"=>$empresa, 
                                  ":publica"=>$publica, 
                                  ":fechaIngreso"=>$fechaIngreso, 
                                  ":fechaRetiro"=>$fechaRetiro,
                                  ":cargo"=>$cargo,
                                  ":dependencia"=>$dependencia,
                                  ":direccion"=>$direccion,
                                  ":persona"=>$_SESSION['PERSONA']['documento'],
                                  ":pais"=>$pais
    ));
  }

  private function habla($persona, $idioma){
    $con = $this->bd->conectar();
    $sql = "INSERT INTO habla (persona, idioma) VALUES (:persona, :idioma)";
    $consultar = $con -> prepare($sql);
    $consultar -> execute( array( ":persona"=>$persona,
                                  ":idioma"=>$idioma
    ));
  }
}
 ?>
