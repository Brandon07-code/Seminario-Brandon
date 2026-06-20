<?php
$mensaje = "";
$nombre_mostrado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validación básica
	if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono'])) {
		$nombre_mostrado = htmlspecialchars($_POST['nombre']);
		$telefono = htmlspecialchars($_POST['telefono']);
$email = htmlspecialchars($_POST['email']);
        $mensaje = "Bienvenido, $nombre_mostrado!";
	} else {
		$mensaje = "Todos los campos son obligatorios.";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	</head>
<body>
	<h2>Registro Rápido</h2>
	<p style="color:blue;"><?= $mensaje ?></p>
	<form method="POST" action="">
		<label>Nombre: <input type="text" name="nombre"></label><br><br>
		<label>Email: <input type="email" name="email"></label><br><br>
		<label>Teléfono: <input type="tel" name="telefono"></label><br><br>
		<button type="submit">Enviar</button>
	</form>
	<p><strong>Comparativa:</strong> Prueba cambiando <code>method="GET"</code> y observa la URL.</p>
</body>
</html>

