<?php
$servername = "localhost";
$database = "test";
$username = "root";
$password = "";
// Create connection
?>
<html>
<?php
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully <br>";
$nombre = 'Prueba';
$dni = '423223';
$correo = 'prueba@gmail.com';
$celular = '999888777';
$fecha = '2022-12-03';

$sql = "INSERT INTO clientelanding (id,nombres,dni,correo,celular,fecha) VALUES (NULL,'$nombre','$dni','$correo','$celular','$fecha');";
if (($result = mysqli_query($conn, $sql)) === false) {
    die(mysqli_error($conn));
} else {
    echo "<br>Logrado: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

</html>