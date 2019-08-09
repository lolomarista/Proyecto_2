<?php
require_once 'base_dat.php';
$message = '';
if (!empty($_POST['email']) && !empty($POST['password'])) {
  $sql= "INSERT INTO users(email,password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email',$_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password',$password);
  if ($stmt->execute()) {
    $message = 'se creo nuevo usuario';
  } else {
    $message = 'No se creo nuevo usuario';
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
    <?php if(!empty($message)): ?>
      <p><?php $message ?></p>
      <?php endif; ?>
  <form class="formulario" action="registro.php" method="POST">
    <h1>Registrate</h1>
    <div class="contenedor">
      <div class="input-contenedor">
        <i class="fas fa-user-check icon"></i>
        <input type="text" placeholder="Nombre">
      </div>
      <div class="input-contenedor">
        <i class="fas fa-user-check icon"></i>
        <input type="text" placeholder="Apellido">
      </div>
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
      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="file" placeholder="Avatar">
      </div>
      <input type="submit" name="" value="Registrate" class="button">
      <p> Al registrarte aceptas los terminos y condiciones de B&M.</p>
      <p> Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesion</a></p>
    </div>
  </form>





  </body>
</html>
