<?php
session_start();
$_SESSION["nombre"] = "Pedro Perez Corrales”;
$_SESSION["rut"] = "12346543-8”;
$_SESSION["id_usuario"] = "1”;
if (!isset($_SESSION['id_usuario'])){
// Asignamos el valor 1 a la variable
$_SESSION['id_usuario'] = 1;
}
else{
// Incrementamos la variable de sesion en 1
++$_SESSION['id_usuario '];
}
echo $_SESSION['id_usuario '];
?>

<?php
// Borrar la variable de sesion Id_usuario
unset($_SESSION['id_usuario]);
?>