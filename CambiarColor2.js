// Función para cambiar el color del enlace en bucle
function cambiarColorEnBucle() {
    const enlace = document.getElementById('Registrar');
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
  window.onload = cambiarColorEnBucle;// Función para cambiar el color del enlace en bucle