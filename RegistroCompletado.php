<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicidades</title>
</head>
<body>
    <h1>Felicidades</h1>
    <p>
        Sus datos se han enviado nuestros servers. Gracias por colaborar!!
    </p>
    <a href="Excepción.html">Haz click aqui para volver</a>
</body>
</html>

<?php

if ($_SERVER[REQUEST_METHOD] == "POST") {
    $Nombre = $_POST["Nombre"];
    $Nacer = $_POST["Nacer"];
    $Email = $_POST["Email"];
    $Contraseña = $_POST["Contraseña"];
}
?>
<script>
    alert("Tus datos han sido enviado a nuestros servidores")

    var Variable = prompt("Ingresa algún comentario que nos quieras decir");

    if (Variable !== null) {
        alert("Comentario: " + Variable)
    } else {
        alert("fhygdfyd")
    }
</script>