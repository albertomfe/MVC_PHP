<?php

  class View
  {

    public function __construct()
    {
      //echo "<p>se crea Vista Base</p>";
    }

    /*
    RENDERIZAR LA VISTA A CARGAR
    #cargar la vista de acuerdo al parametro enviado
    */
    function render($nombre){
      //echo 'view/'.$nombre.'.php';
      require 'view/'.$nombre.'.php';
    }


  }



?>
