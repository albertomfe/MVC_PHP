<?php

class LoginModel extends Model
{


  public function __construc()
  {
    parent::__construct();//invocar el constructor padre
  }

  #METODO INGRESAR
  public function Ingresar(array $datos=array())
  {
    $tam=sizeof($datos);
    if($tam>0)
    {
      //echo '<pre>'.print_r($datos).'</pre>';
      #conectar ala base de datos
      $sql="select * from usuarios";
      $resultado=mysqli_query(Conectar::con(),$sql);
      while($row=mysqli_fetch_array($resultado))
      {
        echo $row['nombre']."<br />";
      }
    }
  }

}


?>
