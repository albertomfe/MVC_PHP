<?php

  class App
  {

    function __construct()
    {
        //echo "<p> Nueva App </p>";


        $url=isset($_GET['url'])?$_GET['url']:'Login';//obtener el parametro url
        $url=rtrim($url,'/');
        $url=explode('/',$url);//dividir por parametros


        //echo $url;
        //print_r($url);


        #Primero Verificar si no es el Login o la base Principal



        $archivoController='controller/'.$url[0].'.php';//cargar ruta de Ubicacion del controlador

        //validar la existencia dle archivo
        if(file_exists($archivoController))
        {
          require_once $archivoController;//lamar el archivo
          $controller=new $url[0];//instanciar la clase con el nombre del parametro ->invoca el controlador
          $controller->loadModel($url[0]);//cargar el modelo del parametro

          //si tiene un segundo parametro tomarlo como metodo
          if(isset($url[1]))
          {
              //Definir metodos aceptados
              if($url[1]=="entrar" || $url[1]=="create" || $url[1]=="edit"  || $url[1]=="update"  || $url[1]=="delete" )
              {
                #si existe el metodo
                $controller->{$url[1]}();//lo qeu hay aqui convertirlo a metodo instancias un metodo dinamico
              }
              else{
                 header('Location:'.constant('URL').'/login');
              }
          }
        }
        else
        {
         require_once 'controller/errores.php';
         $controller=new Errores();//instanciar a la clase de Error
        }




    }

  }


 ?>
