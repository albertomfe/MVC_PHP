<?php

/*hereda de la clase controlador base*/
class Oficina extends Controller
{


      public function __construct()
      {
        parent::__construct();//ejecuta el constructor de la clase controlador que declara el objeto Vista

        /*#
          Ejecuta el metodo render de la clase View Base
        #*/
        $this->view->render('Oficina/index');
        //echo "Nuevo Controlador Oficina";
      }


      public function saludo()
      {
        echo "<h2>Bienvenido</h2>";
      }


}


 ?>
