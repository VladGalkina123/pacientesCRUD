<?php
include 'db/conexion.php';

$query = "SELECT * FROM pacientes";
$result = pg_query($conn, $query);
?>

<?php while ($row = pg_fetch_assoc($result)) { ?>

    <div class="listaTarjeta">
        <h3>Paciente #<?php echo $row['id']?></h3>
        <p class="tarjetaCampo"><span>Nombre:</span> <?php echo $row['nombremascota']?></p>
        <p class="tarjetaCampo"><span>Propietario:</span> <?php echo $row['nombrepropietario']?></p>
        <p class="tarjetaCampo"><span>Email:</span> <?php echo $row['email']?></p>
        <p class="tarjetaCampo"><span>Síntomas:</span> <?php echo $row['sintomas']?></p>

        <div class="tarjetaAcciones">
            <a class="tarjetaActualizar" href='modificar.php?id=<?php echo $row['id']?>'>Actualizar</a>
            <a class="tarjetaEliminar" href='eliminar.php?id=<?php echo $row['id']?>'>Eliminar</a>
        </div>
    </div>
  
<?php } ?>


