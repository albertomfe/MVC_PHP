<?php

/*
 CLASE CONTROLADOR ES EL MAIN DEL PROYECTO APARTIR DE ESTE HEREDO LOS CONTROLADORES CREADOS
 PARA PODER EJECUTAR MIS METODOS Views,Controlles,Models
*/
class Controller
{

    public function __construct()
    {
      /*echo "<p>  controlador Base  </p>";*/
      //cada que mande llamar el controlador va crear una vista asociada instanciando la clase View Base
      $this->view=new View();
    }

    /*cargar modelo si existe*/
    public function loadModel($model){
      $url='model/'.$model.'.php';
      //echo $url;
      if(file_exists($url))
      {
        require $url;
        $modelName=$model.'Model';
        $this->model=new $modelName;//instanciamos el modelo
      }
    }


}




?>
