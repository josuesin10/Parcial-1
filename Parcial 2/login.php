<?php
$db = new mysqli('localhost', 'root', '', 'sistema', 3306);

if ($db->connect_error) {
    die('Error de conexión: ' . $db->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $db->real_escape_string($_POST['usuario']);
    $password = $_POST['password'];
    $password_encriptado = sha1($password);

    // Preparar la consulta
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE login = ? AND (password = ? OR password = ?)");
    $stmt->bind_param('sss', $usuario, $password, $password_encriptado);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        echo '<div style="text-align: center; margin-top: 50vh; transform: translateY(-50%);"><h1>¡Bienvenido ' . htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8') . '! Has iniciado sesión correctamente.</h1></div>';
    } else {
        echo '<div style="text-align: center; margin-top: 50vh; transform: translateY(-50%);"><h1>Error de login: Usuario o contraseña incorrectos.</h1></div>';
    }

    $stmt->close();
}

$db->close();
?>
