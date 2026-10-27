<?php
$conn = new mysqli("localhost", "root", "");
$conn->query("CREATE DATABASE IF NOT EXISTS proyecto_grupo");
$conn->select_db("proyecto_grupo");
$conn->query("CREATE TABLE IF NOT EXISTS contactos (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(100), mensaje TEXT)");

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $nombre = $conn->real_escape_string($_POST['nombre']);
  $mensaje = $conn->real_escape_string($_POST['mensaje']);
  $conn->query("INSERT INTO contactos (nombre,mensaje) VALUES ('$nombre','$mensaje')");
  echo "¡Guardado!";
}
?>
<form method="POST">
<input name="nombre" placeholder="Tu nombre" required><br><br>
<textarea name="mensaje" placeholder="Mensaje" required></textarea><br><br>
<button>Enviar</button>
</form>
<a href="index.php">Volver</a>