<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "data_base";
$conexion = mysqli_connect($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "Base de datos conectada correctamente";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_apellidos = $_POST['nombre_apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $nacionalidad = $_POST['nacionalidad'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $ocupaciones = implode('; ', $_POST['ocupaciones']);
    $idiomas = implode('; ', $_POST['idiomas']);
    $lenguajes_programacion = implode('; ', $_POST['lenguajes_programacion']);
    $aptitudes = implode('; ', $_POST['aptitudes']);
    $habilidades = implode('; ', $_POST['habilidades']);
    $perfil = $_POST['perfil'];

    // Insertar datos personales en la tabla 'datos_registrados'
    $insertardatos = "INSERT INTO datos_registrados (nombre_apellidos, fecha_nacimiento, nacionalidad, email, telefono, ocupaciones, idiomas, lenguajes_programacion, aptitudes, habilidades, perfil)
                      VALUES ('$nombre_apellidos', '$fecha_nacimiento', '$nacionalidad', '$email', '$telefono', '$ocupaciones', '$idiomas', '$lenguajes_programacion', '$aptitudes', '$habilidades', '$perfil')";

    if (mysqli_query($conexion, $insertardatos)) {
        echo "<p>Los datos personales se insertaron correctamente.</p>";
    } else {
        echo "<p>Error al insertar datos personales: " . mysqli_error($conexion) . "</p>";
    }

    // Obtener el ID del usuario recién insertado
    $usuario_id = mysqli_insert_id($conexion);

    foreach ($_POST['idiomas'] as $key => $idioma) {
        $nivel_idioma = $_POST['nivel_idioma_' . $key][0];
    
        $insertar_idioma = "INSERT INTO idiomas (datos_registrados_id, idioma, nivel)
                            VALUES ('$usuario_id', '$idioma', '$nivel_idioma')";
        
        if (!mysqli_query($conexion, $insertar_idioma)) {
            echo "<p>Error al insertar idioma $idioma: " . mysqli_error($conexion) . "</p>";
        }
    }

    // Insertar experiencia laboral en la tabla 'experiencia_laboral'
    foreach ($_POST['nombre_empresa'] as $key => $empresa) {
        $puesto = $_POST['puesto'][$key];
        $fecha_inicio = $_POST['fecha_inicio'][$key];
        $fecha_fin = $_POST['fecha_fin'][$key];
        $descripcion = $_POST['descripcion'][$key];

        $insertar_experiencia = "INSERT INTO experiencia_laboral (datos_registrados_id, nombre_empresa, puesto, fecha_inicio, fecha_fin, descripcion)
                                 VALUES ('$usuario_id', '$empresa', '$puesto', '$fecha_inicio', '$fecha_fin', '$descripcion')";

        if (!mysqli_query($conexion, $insertar_experiencia)) {
            echo "<p>Error al insertar experiencia laboral para $empresa: " . mysqli_error($conexion) . "</p>";
        }
    }
    mysqli_close($conexion);
} else {
    echo "<h2>Error</h2>";
    echo "<p>No se han recibido datos del formulario.</p>";
}