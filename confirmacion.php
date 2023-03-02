<?php
// Verificar que se haya enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos enviados por el usuario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $estado = $_POST["estado"];
    $cp = $_POST["cp"];
    $pais = $_POST["pais"];

    // Mostrar los datos del usuario para confirmación
    echo "<h2>Por favor confirma que los datos son correctos:</h2>";
    echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
    echo "<p><strong>Apellido:</strong> " . $apellido . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
    echo "<p><strong>Dirección:</strong> " . $direccion . "</p>";
    echo "<p><strong>Ciudad:</strong> " . $ciudad . "</p>";
    echo "<p><strong>Estado:</strong> " . $estado . "</p>";
    echo "<p><strong>Código Postal:</strong> " . $cp . "</p>";
    echo "<p><strong>País:</strong> " . $pais . "</p>";

    // Agregar botón para enviar datos a la base de datos
    echo "<form action='guardar.php' method='post'>";
    echo "<input type='hidden' name='nombre' value='" . $nombre . "'>";
    echo "<input type='hidden' name='apellido' value='" . $apellido . "'>";
    echo "<input type='hidden' name='email' value='" . $email . "'>";
    echo "<input type='hidden' name='telefono' value='" . $telefono . "'>";
    echo "<input type='hidden' name='direccion' value='" . $direccion . "'>";
    echo "<input type='hidden' name='ciudad' value='" . $ciudad . "'>";
    echo "<input type='hidden' name='estado' value='" . $estado . "'>";
    echo "<input type='hidden' name='cp' value='" . $cp . "'>";
    echo "<input type='hidden' name='pais' value='" . $pais . "'>";
    echo "<button type='submit'>Guardar</button>";
    echo "</form>";
} else {
    // Si no se envió el formulario, redireccionar al formulario
    header("Location: formulario.php");
}
?>

