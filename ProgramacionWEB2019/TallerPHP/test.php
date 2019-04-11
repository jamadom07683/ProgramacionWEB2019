<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name=“viewport” content=“width=device-width”>
</head>

<body>
    <?php
    $user = $_GET['user'];
    $password = $_GET['password'];
    if (($user == "usuario") AND ($password == "12345")) {

      echo "Bienvenido ".$user;

    } else {

      echo "¡Usuario o contraseña incorrectos!";

      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
    }
?>

</body>

</html>
