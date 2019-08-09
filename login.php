<?php
session_start();
require 'base_dat.php';
if(!empty($_POST['email']) && !empty($_POST['password'])){
  $records = $conn->prepare('SELECT id, email,password FROM usuarios');
  $records->bindParam(':email',$_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  $message ='';
  if (count($results)>0 && passsword_verify($_POST['password'],$results['password'])) {
    $_SESSION['user_id']= $results['id'];
    header('Location: /php-login');

  } else {
    $message = 'error, no se encuentra en la base de datos';
  }
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maxim-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="log1.css">
    <title></title>
  </head>
  <body>
  <form class="formulario" action="login.php" method="POST">
    <h1>Login</h1>
    <div class="contenedor">
      <div class="input-contenedor">
        <i class="far fa-envelope icon"></i>
        <input type="text" placeholder="mail">
      </div>
      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" placeholder="contraseña">
      </div>
      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" placeholder="confirmar contraseña">
      </div>
      <input type="submit" name="" value="Iniciar Sesion" class="button">
      <p> Al registrarte aceptas los terminos y condiciones de B&M.</p>
      <p> No tienes una cuenta?<a class="link" href="register.html">Registrate</a></p>
    </div>
  </form>





  </body>
</html>
