<?php
include 'db/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombremascota = $_POST['nombremascota'];
    $nombrepropietario = $_POST['nombrepropietario'];
    $email = $_POST['email'];
    $sintomas = $_POST['sintomas'];

    $query = "UPDATE pacientes SET nombremascota = '$nombremascota', nombrepropietario = '$nombrepropietario', email = '$email', sintomas = '$sintomas' WHERE id = $id";
    $result = pg_query($conn, $query);

    if ($result) {
        echo "Paciente actualizado exitosamente";
        header("Location: index.php");  // Redirige a la página de listado
        exit;
    } else {
        echo "Error al actualizar paciente: " . pg_last_error($conn);
    }
}
?>