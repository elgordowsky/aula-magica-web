<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recibir datos del formulario
    $nombreEstudiante = isset($_POST['nombre_estudiante']) ? $_POST['nombre_estudiante'] : '';
    $apellidosEstudiante = isset($_POST['apellidos_estudiante']) ? $_POST['apellidos_estudiante'] : '';
    $fechaNacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '';
    $gradoAspirado = isset($_POST['grado_aspirado']) ? $_POST['grado_aspirado'] : '';
    $nombrePadre = isset($_POST['nombre_padre']) ? $_POST['nombre_padre'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';

    
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Formulario Enviado</title>
        <link href='./output.css' rel='stylesheet'>
    </head>
    <body class='container mx-auto px-4 text-center'>
        <header class='bg-gradient-to-r from-orange-400 via-pink-500 to-red-500 flex flex-col items-center py-6'>
            <h1 class='font-fancy font-extrabold text-4xl md:text-6xl lg:text-8xl text-yellow-500'>Aula Mágica</h1>
            <p class='font-bold font-serif text-3xl text-yellow-400'>Jardín Infantil</p>
            
        </header>
        <main class='my-8'>
            <section class='bg-white rounded-lg shadow-lg p-8'>
                <h2 class='text-3xl font-bold text-pink-500 mb-6'>¡Formulario enviado con éxito!</h2>
                <p class='text-xl text-gray-700'>
                    Gracias, " . htmlspecialchars($nombrePadre) . ", por completar el formulario de admisión.
                </p>
                <a href='index.html'><p class='font-bold font-serif text-3xl text-yellow-500 mt-10'>VOLVER A INICIO</p></a>
            </section>
        </main>
    </body>
    </html>";
}
?>
