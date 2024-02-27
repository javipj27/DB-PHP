document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formulario");
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Validación de campos
        const numeroCuenta = document.getElementById("numero_cuenta").value.trim();
        const numeroTarjeta = document.getElementById("numero_tarjeta").value.trim();
        const dni = document.getElementById("dni").value.trim();

        if (numeroCuenta === "" || numeroTarjeta === "" || dni === "") {
            alert("Por favor, complete todos los campos.");
            return;
        }

        // Envía el formulario si todos los campos están completos
        form.submit();
    });
});
