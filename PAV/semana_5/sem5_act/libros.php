<?php
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Almacenar los datos de los libros en un array
    $libros = array();
    while ($row = $result->fetch_assoc()) {
        $libros[$row["id_book"]] = $row;
    }
} else {
    echo "No se encontraron libros en la base de datos.";
}
?>