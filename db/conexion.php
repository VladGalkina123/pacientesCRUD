<?php
$host = 'dpg-crfmqe88fa8c73d8na9g-a.oregon-postgres.render.com';
$dbname = 'bdpostgresql';
$user = 'root';
$password = 'H6705LI0ey8RAR1nS7owamXlbpSnwuFU';

$conn_string = "host=$host dbname=$dbname user=$user password=$password";

$conn = pg_connect($conn_string);

if (!$conn) {
    die("Error al conectar a la base de datos");
}
?>