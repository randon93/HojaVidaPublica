<?php
/**
 *
 */
class Conexion {
  function __construct(){
    $this->bd = constant('BD');
    $this->usuarioBd = constant('USER');
    $this->pasword = constant('PASSWORD');
    $this->pdo = null;
  }
  /** //////////////////////////////////////////////  */
            /** METODO CREA CONEXION BD*/
  /** //////////////////////////////////////////////  */
  public function conectar()  {
    if ($this->pdo == null) {
      try {
          $optiones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES  => false
          ];
          $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=' . $this->bd , $this->usuarioBd , $this->pasword, $optiones);
          return $this->pdo;
      } catch (PDOException $e) {
          print "¡Error!: " . $e->getMessage() . "<br/>";
          die();
      }
    } else {
      return $this->pdo;
    }
  }
  /** //////////////////////////////////////////////  */
            /** METODO CIERRA CONEXION BD*/
  /** //////////////////////////////////////////////  */
  public function cerrarCon(){
    $this->pdo = null;
  }


  /** //////////////////////////////////////////////  */
            /**  metodo en el cual nos retona
        *un TRUE si el usuario ya existe en la BD*/
  /** //////////////////////////////////////////////  */
  public function verificarEx($email){
      $con = $this->conectar();
      $exito = $con->prepare("SELECT COUNT(*) FROM usuario WHERE email = ?");
      $exito->execute(array($email));
      if ($exito->fetchColumn() > 0) {
        $this->cerrarCon();
        return true;
      }
        $this->cerrarCon();
        return false;
  }
}//clase
 ?>
