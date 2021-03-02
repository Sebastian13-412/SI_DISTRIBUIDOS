<?php
/*
  session_start();

  if (!empty($_POST['ti']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT `ID`, `documento_IT`, `contraseña`FROM `usuarios` WHERE ti = :ti  ');
    $records->bindParam(':ti', $_POST['ti']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
  //    $_SESSION['user_id'] = $results['id'];


      $message = 'NEhorabuena chaval';
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

*/
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <h1>INGRESO</h1>
  <span>no posee una cuenta?  <a href="registro.php">Registrarse</a></span>

  <form action="encuesta.php" method="POST">
    <input name="ti" type="text" placeholder="Ingrese su N° de Identidad">
    <input name="password" type="password" placeholder="Ingrese contraseña">

    <input type="submit" value="enviar">
  </form>
</body>
</html>
