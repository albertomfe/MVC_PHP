<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Imacop</title>
  </head>

  <body>
    <?php  require 'View/header.php';  ?>

      <div id='main'>
          <h1>Bienvenido a Imacop</h1>

          <form action='<?php echo constant('URL'); ?>/login/entrar' method='post'>
            <input type='text' name='c_usser' placeholder="user" required />
            <input type='password' name='c_password' placeholder="pass" required/>
            <button name='b_guardar'>Ingresar</button>
          </form>


      </div>

    <?php  require 'View/footer.php';  ?>
  </body>

</html>
