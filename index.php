<?php
   use \Tutoriel\HTML\Bootsrapform;
   use \Tutoriel\Autoloader;
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
  </head>

  <body>
    <?php
    
  require 'class/autoloader.php';
   Autoloader::register();
   $form = new Bootsrapform($_POST);
  
  ?>
    <form action="" method="post">
      <?php

    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
    print_r( $form->date());
    ?>
    </form>
  </body>

</html>