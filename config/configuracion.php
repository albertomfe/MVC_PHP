<?php
   declare(strict_types=1);#modo estricto PHP
   session_start ();

     /**
     * Return true si es Linux
     * @return bool
     */
      function IsLinux() {
          return (stristr(PHP_OS, 'linux') !== false);
      }

     /**
     * Return true si es Windows
     * @return bool
     */
    function  IsWindows() {
        return (stristr(PHP_OS, 'winnt')!==false || stristr(PHP_OS, 'win32')!==false);
    }

    #definir el sistema Operativo con el que se esta trabjando
    if(isWindows()) {
        define("SERVER_OS_ENCODING", "Windows");
    } else {
        define("SERVER_OS_ENCODING", "Linux");
    }
    //echo constant('SERVER_OS_ENCODING');
    #seguridad de las Sessiones


    /*
    SEGURIDAD DE LAS SESSIONES
    */
    ini_set('session.cookie_secure', 'on');  //solo se envian por navegadores seguros
    ini_set('session.use_only_cookies', "1");
    ini_set('session.cookie_httponly', "1");//decirle al navegador de los usuarios que no exponga la cookie a las secuencias de comandos del lado del cliente, como JavaScript.
    ini_set('session.cookie_lifetime ', "0");
    ini_set('session.name','MVCimacop');



     /*crear las constantes*/
     define('URL','http://localhost/MVC');//URL BASE

     /*CONFIGURACION DE LA BASE DE DATOS*/
     define('HOST','65.99.252.126');
     define('DB','tsimac_bd');
     define('USER','tsimac_user');
     define('PASS','Pigui2010');
     define('CHARSET','utf8mb4');

     define('num_reg_x_pag',15);#define el numero de registros de paginacion por pagina

     #SERVIDOR DE CORREOS
     define('account_mail','imacop@testimacop.com');#cuenta de correo
     define('host_mail','mail.testimacop.com');#servidor host de correo
     define('user_name_mail','imacop@testimacop.com');#usuario de correo
     define('password_user_mail','oNxCHqTk?M[Q');#usuario de correo
     define('port_mail',587);#puerto

     #ZONA HORARIA
     setlocale(LC_TIME, 'spanish');
  	 date_default_timezone_set('America/Monterrey');//zona horaria
  	 date_default_timezone_set('UTC');


?>
