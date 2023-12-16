        // Función para mostrar ventanas emergentes
        function moverVentanaEmergente() {
            var ventanaEmergente = window.open("popup.html" , "_blank", "width=600, height=600");
            var EmergenteVentana = window.open("popup2.html" , "_blank", "width=600, height=600")
        }
        // Llama a la función cuando la página se carga
        window.addEventListener("load", moverVentanaEmergente);