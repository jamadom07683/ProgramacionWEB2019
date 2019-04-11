ruta
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

   $user1 = "mario";

   $pass1 = "clave1";

   $user2 = "juan";

   $pass2 = "clave2";

   $user3 = "diego";

   $pass3 = "clave3";

   $error_notif = "¡Contraseña o usuario incorrecto!" . '<a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';



   switch ($user) {

      case $user1:

         if ($password == $pass1) {

            echo "Bienvenido " . $user;

         } else {

            echo $error_notif;

         }
      break;

      case $user2:

         if ($password == $pass2) {

            echo "Bienvenido " . $user;

         } else {

            echo $error_notif;

         }
      break;
      case $user3:

         if ($password == $pass3) {

            echo "Bienvenido " . $user;

         } else {

            echo $error_notif;
         }
      break;

      default:

         echo $error_notif;
   }
?>

</body>

</html>
