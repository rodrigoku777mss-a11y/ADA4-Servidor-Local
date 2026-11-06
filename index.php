<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <header> 
        <h1> Evolucion y Tecnologias de la Web </h1>
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
            <h2>Bienvenidos al Portal de la Historia Web</h2>
            <p>
                La <strong>World Wide Web</strong> ha transformado radicalmente la forma en que nos comunicamos, 
                aprendemos y trabajamos a nivel global.
            </p>

            <div class="imagen-inicio">
                <img src="media/imagen1.avif" alt="Ilustración de HTML, CSS y JavaScript" class="imagen-destacada">
            </div>

            <h3>Las 3 Tecnologias Fundamentales</h3>
            <ul>
                <li><strong>HTML:</strong> Proporciona la estructura y el marcado del contenido.</li>
                <li><strong>CSS:</strong> Define el diseño visual, distribución y estilos.</li>
                <li><strong>JavaScript:</strong> Agrega lógica, comportamiento e interactividad.</li>
            </ul>

            <h3> Contenido de la pagina</h3>
            <ol>
                <li>Evolución histórica y la línea del tiempo interactiva.</li>
                <li>Personajes pioneros que hicieron posible la Web.</li>
                <li>Evolución de los navegadores y estándares actuales.</li>
            </ol>


        </section>
    </main>

    <footer>
        Procesado en mi servidor local con XAMMP el 
        <strong><?php echo date("d/m/Y"); ?> a las <?php echo date("H:i:s"); ?> </strong>
    </footer>
    
</body>
</html>