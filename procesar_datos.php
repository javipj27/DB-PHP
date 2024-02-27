<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_cuenta = $_POST["numero_cuenta"];
    $numero_tarjeta = $_POST["numero_tarjeta"];
    $dni = $_POST["dni"];
    
    // Aquí puedes realizar validaciones y procesamiento de datos
    
    // Redirecciona o muestra un mensaje de confirmación
    header("Location: confirmacion.php");
    exit();
}
?>
