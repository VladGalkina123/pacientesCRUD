

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <title>CRUD</title>
</head>
<body>
    
    <?php 
        include 'db/conexion.php';

        $id = $_GET['id'];

        $query = "SELECT * FROM pacientes WHERE id = $id";
        $result = pg_query($conn, $query);

        if (!$result) {
            echo "Error en la consulta: " . pg_last_error($conn);
            exit;
        }
        
        $paciente = pg_fetch_assoc($result);
        
        
    ?>

    <h1 class="titulo">Actualizar Paciente CRUD</h1>


    <form class="tablaContenido" method="POST" action="actualizar.php">

        <input type="hidden" name="id" value="<?php echo $paciente['id']?>">

        <div class="tablaCampo">
            <label class="tablaLabel" for="nombremascota">Nombre Mascota</label>
            <input id="nombremascota" class="tablaInput" value="<?php echo $paciente['nombremascota']?>" type="text" name="nombremascota" placeholder="Nombre de la Mascota" required>
        </div>

        <div class="tablaCampo">
            <label class="tablaLabel" for="nombrepropietario">Nombre Propietario</label>
            <input class="tablaInput" type="text" value="<?php echo $paciente['nombrepropietario']?>" name="nombrepropietario" placeholder="Nombre de la Mascota" required>
        </div>

        <div class="tablaCampo">
            <label class="tablaLabel" for="email">Email</label>
            <input class="tablaInput" type="mail" value="<?php echo $paciente['email']?>" name="email" placeholder="Nombre de la Mascota" required>
        </div>

        <div class="tablaCampo">
            <label class="tablaLabel" for="sintomas">Síntomas</label>
            <textarea class="tablaInput" name="sintomas" id="" placeholder="Describe los sintomas" required><?php echo $paciente['sintomas']?></textarea>
        </div>

        <div class="tablaCampo">
            <input class="tablaBoton" type="submit" value="Modificar Paciente">
        </div>

    </form>

</body>
</html>

