<?php

  /*hace referencia al controlador creado en el controlador Base*/
  class Errores extends Controller
  {

    public function __construct()
    {
      //echo "<p>Error al Cargar Recurso</p>";
      parent::__construct();//ejecuta el constructor de la clase controlador que declara el objeto Vista
      /*
        Ejecuta el metodo render creado en la Clase Vista Base
        Y este a su vez manda llamar el Archivo Ubicado en la Carpeta view/Errores/index.php
      */
      $this->view->mensaje='Hubo un Error en la Solicitud o no Existe la Pagina';//declara una variable en la clase vista del tipo mensaje
      $this->view->render('Errores/index');
    }

  }


 ?>
