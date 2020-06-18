<?php

  /*hace referencia al controlador Base*/
  class Ayuda extends Controller
  {

    public function __construct()
    {
      parent::__construct();//ejecuta el constructor de la clase controlador que declara el objeto Vista
      /*
        Ejecuta el metodo render creado en la Clase Vista Base
        Y este a su vez manda llamar el Archivo Ubicado en la Carpeta view/Errores/index.php
      */
      $this->view->render('Ayuda/index');
    }

  }


 ?>
