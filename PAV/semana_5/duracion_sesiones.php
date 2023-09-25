<?php
session_start();//inicializa la sesion
$_SESSION['nombre']= "Carlos Andres";//Se crea la variable que guarda el nombre (variable de sesion)
$_SESSION['timeout']= time();//Se crea para determinar la hora de inicio de la sesion (variable de sesion)
$tiempo_actual=time();//Se captura la hora actual
$tiempo_sesion=$tiempo_actual-$_SESSION['timeout']; //Se calcula el tiempo de la sesion
echo "Esta sesion tiene una duración de : ".floor($tiempo_sesion/60). " Minutos y ".($tiempo_sesion %
60) . " Segundos";
?>