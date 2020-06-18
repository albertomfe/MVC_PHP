<?php

  class Conectar{

    private $servidor;
		private $usuario;
		private $password;
		private $bd;
		private $charset;
    public static $conexion;

    public function __construct()
    {
      /*$this->servidor=constant('HOST');
      $this->bd=constant('DB');
      $this->usuario=constant('USER');
      $this->password=constant('PASS');
      $this->charset=constant('CHARSET');*/
      self::$conexion=null;
    }

    public static function con()
    {
      try
      {
        @$conexion=mysqli_connect(constant('HOST'),constant('USER'),constant('PASS'));
  			@mysqli_query($conexion,"SET NAMES 'utf8' ");
  			@mysqli_select_db($conexion,constant('DB'));
        return $conexion;
      }
      catch(mysqli_error $e)
      {
        print_r('Error Conexion: '.$e->getMessage());
      }
    }



  }



?>
