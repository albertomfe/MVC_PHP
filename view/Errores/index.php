<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Error</title>
  </head>

  <body>
    <?php  require 'view/header.php';  ?>
      <div id='main'>
        <h1>Esta es la Vista de Error</h1>
        <p class='error'>
          <?php echo $this->mensaje; ?>
        </p>
      </div>
    <?php  require 'view/footer.php';  ?>
  </body>

</html>
