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
    ?>

    <?php include 'header.php' ?>

    <main class="contPrincipal">
        
        <div>
            <h2>Seguimiento Pacientes</h2>
            <p>Añade Pacientes y <span>Administralos</span></p>

            <div class="tabla">

            <?php 
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nombremascota = $_POST['nombremascota'];
                    $nombrepropietario = $_POST['nombrepropietario'];
                    $email = $_POST['email'];
                    $sintomas = $_POST['sintomas'];
                    
                
                    $query = "INSERT INTO pacientes (nombremascota, nombrepropietario, email, sintomas) VALUES ('$nombremascota', '$nombrepropietario', '$email', '$sintomas')";
                    $result = pg_query($conn, $query);
                
                    if ($result) {
                        echo "Paciente creado exitosamente";
                    } else {
                        echo "Error al crear paciente";
                    }
                }
            ?>

                <form class="tablaContenido" method="POST">

                    <div class="tablaCampo">
                        <label class="tablaLabel" for="nombremascota">Nombre Mascota</label>
                        <input id="nombremascota" class="tablaInput" type="text" name="nombremascota" placeholder="Nombre de la Mascota" required>
                    </div>

                    <div class="tablaCampo">
                        <label class="tablaLabel" for="nombrepropietario">Nombre Propietario</label>
                        <input class="tablaInput" type="text" name="nombrepropietario" placeholder="Nombre de la Mascota" required>
                    </div>

                    <div class="tablaCampo">
                        <label class="tablaLabel" for="email">Email</label>
                        <input class="tablaInput" type="mail" name="email" placeholder="Nombre de la Mascota" required>
                    </div>

                    <div class="tablaCampo">
                        <label class="tablaLabel" for="sintomas">Síntomas</label>
                        <textarea class="tablaInput" name="sintomas" id="" placeholder="Describe los sintomas" required></textarea>
                    </div>

                    <div class="tablaCampo">
                        <input class="tablaBoton" type="submit" value="Agregar Paciente">
                    </div>

                </form>
            </div>
        </div>

        

        <div class="lista">

            <div>
                <h2>Listado Pacientes</h2>
                <p>Administra tus Pacientes y Citas</span></p>
            </div>

            <?php 
            
            include 'listar.php'
            
            ?>
        </div>
    </main>
    
</body>
</html>