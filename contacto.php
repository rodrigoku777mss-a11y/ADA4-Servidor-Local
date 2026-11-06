<?php
$mensajeRespuesta = "";
$claseAlerta = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $basedatos = "ada4_db";

    $conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $nombre      = htmlspecialchars($_POST['nombre'] ?? '');
    $correo      = htmlspecialchars($_POST['correo'] ?? '');
    $navegador   = htmlspecialchars($_POST['navegador'] ?? 'No especificado');
    $experiencia = intval($_POST['experiencia'] ?? 0);
    $perfil      = htmlspecialchars($_POST['perfil'] ?? 'No especificado');
    $boletin     = isset($_POST['boletin']) ? 'Sí' : 'No';

    if (!empty($nombre) && !empty($correo)) {

        $sql = "INSERT INTO contactos (nombre, correo, navegador, experiencia, perfil, boletin) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexion, $sql);
        mysqli_stmt_bind_param($stmt, "sssiss", $nombre, $correo, $navegador, $experiencia, $perfil, $boletin);

        if (mysqli_stmt_execute($stmt)) {
            $mensajeRespuesta = "Gracias por tu registro, $nombre. Hemos recibido su información correctamente";
            $claseAlerta = "exito";
        } else {
            $mensajeRespuesta = "Error al registrar la información: " . mysqli_error($conexion);
            $claseAlerta = "error";
        }

        mysqli_stmt_close($stmt);
    } else {
        $mensajeRespuesta = "Por favor completa los campos obligatorios.";
        $claseAlerta = "error";
    }
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <header>
        <h1>Evolución y Tecnologías de la Web</h1>
        <nav class="menu-principal">
            <ul>
                <li> <a href="index.php">INICIO</a></li>
                <li> <a href="historia.php">HISTORIA</a></li>
                <li> <a href="pioneros.php">PIONEROS</a></li>
                <li> <a href="navegadores.php">NAVEGADORES</a></li>
                <li> <a href="contacto.php">CONTACTO</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Contacto y Registro de Colaboradores</h2>
            <p>
                ¿Tienes sugerencias sobre la historia del desarrollo web o deseas colaborar con nuestro portal? 
                Completa el siguiente formulario:
            </p>

            <?php if (!empty($mensajeRespuesta)): ?>
                <div class="alerta <?php echo $claseAlerta; ?>">
                    <?php echo $mensajeRespuesta; ?>
                </div>
            <?php endif; ?>

            <form action="contacto.php" method="POST" id="form-contacto">

                <div class="campo-form">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Rodrigo de Jesús Ku Mis" required>
                </div>

                <div class="campo-form">
                    <label for="correo">Correo Electrónico: </label>
                    <input type="email" id="correo" name="correo" placeholder="usuario@ejemplo.com" required>
                </div>

                <div class="campo-form">
                    <label for="navegador">Navegador preferido: </label>
                    <select id="navegador" name="navegador" required>
                        <option value="">Seleccione una opción</option>
                        <option value="chroome">Google Chroome</option>
                        <option value="firefox">FireFox</option>
                        <option value="edge">Microsoft Edge</option>
                        <option value="safari">Safari</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label for="experiencia">Años de experiencia en la web (0 a 50):</label>
                    <input type="number" id="experiencia" name="experiencia" min="0" max="50" required>
                </div>

                <div class="campo-form">
                    <label>Perfil: </label>
                    <div class="opciones-perfil">
                        <input type="radio" id="estudiante" name="perfil" value="estudiante"></imput>
                        <label for="estudiante"> Estudiante</label>
                        <input type="radio" id="docente" name="perfil" value="docente">
                        <label for="docente"> Docente</label>
                        <input type="radio" id="desarrollador" name="perfil" value="desarrollador">
                        <label for="desarrollador"> Desarrollador</label>
                    </div>
                </div>
                <br>
                <div class="campo-form">
                    <label class="checkbox-label">
                        <input type="checkbox" id="boletin" name="boletin" value="si">
                        Deseo recibir el boletín con novedades
                    </label>
                </div>
                <br>

                <button type="submit" id="btn-enviar" class="btn-submit">Enviar Registro</button>
            </form>

            <div id="mensaje-estado"></div>

        </section>
    </main>

    <footer>
        Procesado en mi servidor local con XAMMP el 
        <strong><?php echo date("d/m/Y"); ?> a las <?php echo date("H:i:s"); ?> </strong>
    </footer>

</body>
</html>