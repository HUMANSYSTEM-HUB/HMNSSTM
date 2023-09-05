<?php
// Replace these with your actual database credentials
$servername = "rm-3ns39u9i65b3nfdzd0o.mysql.rds.aliyuncs.comr";
$username = "human";
$password = "A2G%@p+ybr3KZY";
$dbname = "Human_System";

// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize the form data (you should use more thorough sanitization and validation methods)
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$curp = $_POST['curp'];
$rfc = $_POST['rfc'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$tarjeta_chip = $_POST['tarjeta_chip'];
$contrasena = $_POST['contraseña'];

// Prepare and execute the SQL query to insert the data
$sql = "INSERT INTO your_table_name (nombre, direccion, correo, telefono, curp, rfc, fecha_nacimiento, tarjeta_chip, contrasena)
        VALUES ('$nombre', '$direccion', '$correo', '$telefono', '$curp', '$rfc', '$fecha_nacimiento', '$tarjeta_chip', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
