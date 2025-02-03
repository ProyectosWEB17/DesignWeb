<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website_type = $_POST['website_type'];
    $features = $_POST['features'];
    $timeline = $_POST['timeline'];
    $budget = $_POST['budget'];
    $additional_info = $_POST['additional_info'];

    // Configuración del correo
    $to = "j.armijo2016@gmail.com"; // Correo al que se enviarán los datos
    $subject = "Nuevo mensaje de contacto desde el formulario";

    // Construir el contenido del mensaje
    $message = "
    <html>
    <head>
    <title>$subject</title>
    </head>
    <body>
    <h2>Datos del Proyecto</h2>
    <p><strong>Nombre:</strong> $name</p>
    <p><strong>Correo Electrónico:</strong> $email</p>
    <p><strong>Tipo de Página:</strong> $website_type</p>
    <p><strong>Funciones:</strong> $features</p>
    <p><strong>Plazo de Entrega:</strong> $timeline</p>
    <p><strong>Presupuesto:</strong> $budget</p>
    <p><strong>Información Adicional:</strong> $additional_info</p>
    </body>
    </html>
    ";

    // Para enviar el correo HTML, se deben establecer las cabeceras
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

    // Cabeceras adicionales
    $headers .= 'From: <' . $email . '>' . "\r\n";  // Remitente del correo

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito";
    } else {
        echo "Hubo un problema al enviar el mensaje";
    }
}
?>
