<?php

/*hereda de la clase controlador base*/
class Login extends Controller
{
      public function __construct()
      {
        parent::__construct();//ejecuta el constructor de la clase controlador que declara el objeto Vista
        /*#
          Ejecuta el metodo render de la clase View Base
        #*/
        $this->view->render('Login/index');//echo "Nuevo Controlador Login";
      }

      

      public function entrar()
      {
        //Obtener los datos
        $usuario=$_POST['c_usser'];
        $password=$_POST['c_password'];

        //armar el array a enviar
        $datos['usuario']=$usuario;
        $datos['password']=$password;
        $this->model->Ingresar($datos);
      }


}


 ?>
