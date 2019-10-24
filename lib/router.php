<?php
class Router{

    function __construct(){
        $sesion = new Sesion();
        $this->validadSesion();
    }

    private function validadSesion(){
        if ( !isset( $_SESSION['USER']) ) {
            $this->sesionOff();
        }else{echo "on";
            $this->sesionOn();
        }
    }

    private function sesionOn(){echo "sesionOn";
      $url = isset($_GET['url']) ? $_GET['url']: "login";
      $url = rtrim($url, '/');
      $url = explode('/', $url);
 
      $archivo = "CONTROLADOR/$url[0]Controlador.php";
        if ( file_exists($archivo) ) {
          require_once $archivo;
          $nom = "$url[0]Controlador";
          $ctr = new $nom;
          $ctr->CrearModelo($url[0]);
          if ( isset($url[1]) ) { 
            $ctr->{$url[1]}();
          }else{
            //require_once "CONTROLADOR/vistasControlador.php";
            //$ctrV = new vistasControlador();
            //$ctrV -> CrearModelo("vistas");
            $ctr -> {$url[0]}();
          }
        }else {
          require_once "CONTROLADOR/vistasControlador.php";
          $nom = "vistasControlador";
          $ctr = new $nom;
          $ctr->error();
        }
  }

  private function sesionOff(){echo "SESIONoff";
    $url = isset($_GET['url']) ? $_GET['url']: 'login/inicio';
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    require_once "CONTROLADOR/$url[0]Controlador.php";
    $nom = "$url[0]Controlador";
    $ctr = new $nom;
    $ctr -> CrearModelo($url[0]);
    if ( isset($url[1]) ) { 
      $ctr->{$url[1]}();
    }else{
      // $ctr -> getCtrVista() -> renderI($url[0]);
       $ctr -> {$url[0]}();
    }
    return false;
  }
    
}
