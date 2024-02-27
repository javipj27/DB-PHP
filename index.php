<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Bancarios</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Ingrese sus datos bancarios</h2>
        <form method="post" action="procesar_datos.php">
            <label for="numero_cuenta">Número de cuenta:</label><br>
            <input type="text" id="numero_cuenta" name="numero_cuenta" required><br>
            
            <label for="numero_tarjeta">Número de tarjeta bancaria:</label><br>
            <input type="text" id="numero_tarjeta" name="numero_tarjeta" required><br>
            
            <label for="dni">DNI:</label><br>
            <input type="text" id="dni" name="dni" required><br>
            
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
