// Función para crear y mostrar la alerta flotante
function showFloatingAlert(message) {
    // Crear elemento de alerta
    var alertDiv = document.createElement('div');
    alertDiv.className = 'alert alert-success floating-alert';
    alertDiv.innerHTML = '<strong>¡Éxito!</strong> ' + message;

    // Agregar la alerta al contenedor
    var container = document.getElementById('floating-alert-container');
    container.appendChild(alertDiv);

    // Desaparecer la alerta después de 5 segundos
    setTimeout(function() {
        container.removeChild(alertDiv);
    }, 5000); // Cambia este valor para ajustar la duración de la alerta
}

// Ejemplo de uso: mostrar una alerta flotante con un mensaje
showFloatingAlert('Usuario creado correctamente.');
