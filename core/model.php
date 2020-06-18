<?php
/*
contiene toda la logica de como se moldea o trabajan los datos los controladores no tienen acceso a eso ni le importa saber solo rutean
*/
class Model
{


  public function __construc(){
    /**/
    $this->db=new Database();//instancia a la base de datos
  }


}



 ?>
