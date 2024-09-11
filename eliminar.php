<?php 

    include 'db/conexion.php';
    $id = $_GET['id'];
    

    $query = "DELETE FROM pacientes WHERE id = $id";
    $result = pg_query($conn, $query);

    if ($result) {
        echo "Paciente eliminado exitosamente";
        header("Location: index.php");  // Redirige a la página de listado
        exit;
    } else {
        echo "Error al eliminar paciente: " . pg_last_error($conn);
    }
?>