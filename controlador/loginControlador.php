<?php /**
 *
 */
class loginControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

    public function login()  {// echo "<h1>CONTROLADOR LOGIN</h1>";
      $user = $_GET['user'];      
      $user = $this->getCtrModel()->login($user);
      if ( $user ) {
        
        $this->getCtrVista()->renderI('perfil');
      }else{
        // $this->getCtrVista()->personal = $this->getCtrModel()->;
       $this->getCtrVista()->renderI('perfil');
        // header('Location:  http://127.0.0.1/acopio/vistas/error?msj=Usuario y/o Contraseña Errada');
      }

    }

    public function persona(){
      $nombre = $_POST['nombre'];
      $apellidoUNO = $_POST['apellidoUno'];
      $apellidoDos = $_POST['apellidoDos'];
      $tipoDoc = $_POST['tipoDoc'];
      $documento = $_POST['documento'];
      $sexo = $_POST['genero'];
      $nacionalidad = $_POST['nacionalidad'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
      $this->getCtrModel()->persona($nombre, $apellidoUNO, $apellidoDos, $tipoDoc, $documento, $sexo, $nacionalidad, $correo, $telefono);
      header('Location:  http://127.0.0.1/hojavidapublica/login?user='.$documento);
    }

    public function basica(){      
      $fechaGrado = $_POST['fechaGrado'] ;
      $curso = $_POST['curso'];
      $titulo = $_POST['titulo'];
      $persona = $_POST['ccB'];
      echo $fechaGrado;
      echo $curso;
      echo $titulo;
      echo $persona;
      $this->getCtrModel()->basicaN($fechaGrado, $curso, $titulo, $persona);
      header('Location:  http://127.0.0.1/hojavidapublica/login?user='.$persona);
    }

    public function experiencia(){
      $empresa = $_POST['empresa'];
      $publica = $_POST['tipoExp'];
      $fechaIngreso = $_POST['fechaIngresoExp'];
      $fechaRetiro  = $_POST['fechaRetiroExp'];
      $cargo = $_POST['cargoExp'];
      $dependencia  = $_POST['dependenciaExp'];
      $direccion = $_POST['direccionExp'];
      $persona  = $_SESSION['PERSONA']['documento'];
      $pais = $_POST['paisE'];
      $this->getCtrModel()->empleoActualN($empresa, $publica, $fechaIngreso, $fechaRetiro, $cargo, $dependencia, $direccion, $persona, $pais);
      header('Location:  http://127.0.0.1/hojavidapublica/login?user='.$persona);
      }

    public function inicio(){
      $this->getCtrVista()->renderI("inicio");
    }

    public function cerrar()    {
      session_unset();
      session_destroy();
      header("Location:  http://127.0.0.1/acopio");
    }
}
 ?>
