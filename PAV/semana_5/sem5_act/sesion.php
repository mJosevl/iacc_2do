<?php
// Iniciar la sesión
session_start();

// Obtener los datos del cliente (simulados)
$nombre = "Juan";
$apellido = "Perez";
$rut = "12345678-9";

// Registrar los datos en variables de sesión
$_SESSION['nombre'] = $nombre;
$_SESSION['apellido'] = $apellido;
$_SESSION['rut'] = $rut;

echo "Sesión creada y variables de sesión registradas.";

// Comprobar si las variables de sesión existen
if (isset($_SESSION['nombre']) && isset($_SESSION['apellido']) && isset($_SESSION['rut'])) {
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $rut = $_SESSION['rut'];

    echo "Nombre: $nombre<br>";
    echo "Apellido: $apellido<br>";
    echo "RUT: $rut<br>";
} else {
    echo "Las variables de sesión no están registradas.";
}
// Simular una base de datos de libros (debes reemplazar con tu propia base de datos)
$libros = array(
    1 => array("titulo" => "Libro 1", "autor" => "Autor 1", "precio" => 10),
    2 => array("titulo" => "Libro 2", "autor" => "Autor 2", "precio" => 15),
    3 => array("titulo" => "Libro 3", "autor" => "Autor 3", "precio" => 20),
    4 => array("titulo" => "Libro 4", "autor" => "Autor 4", "precio" => 25),
    5 => array("titulo" => "Libro 5", "autor" => "Autor 5", "precio" => 30),
);

// Inicializar el carrito de compra si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Agregar un libro al carrito de compra
if (isset($_POST['agregar']) && isset($_POST['libro_id'])) {
    $libro_id = $_POST['libro_id'];
    if (array_key_exists($libro_id, $libros)) {
        $_SESSION['carrito'][$libro_id] = $libros[$libro_id];
        echo "Libro agregado al carrito.";
    }
}

// Mostrar los libros y el carrito de compra
echo "<h1>Tienda de Libros</h1>";

// Listar los libros disponibles
echo "<h2>Libros Disponibles</h2>";
echo "<ul>";
foreach ($libros as $id => $libro) {
    echo "<li>{$libro['titulo']} - {$libro['autor']} - \${$libro['precio']} <form method='POST' action=''>
    <input type='hidden' name='libro_id' value='$id'>
    <input type='submit' name='agregar' value='Agregar al Carrito'></form></li>";
}
echo "</ul>";

// Mostrar el carrito de compra
echo "<h2>Carrito de Compra</h2>";
if (empty($_SESSION['carrito'])) {
    echo "El carrito de compra está vacío.";
} else {
    echo "<ul>";
    foreach ($_SESSION['carrito'] as $id => $libro) {
        echo "<li>{$libro['titulo']} - \${$libro['precio']} <a href='eliminar.php?id=$id'>Eliminar</a></li>";
    }
    echo "</ul>";
}
?>