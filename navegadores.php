<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegadores</title>
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
            <h2>La Guerra de los Navegadores</h2>
            <p>
                Los <strong>navegadores web</strong> son las herramientas encargadas de interpretar el código HTML, CSS y JavaScript 
                para renderizar las páginas visualmente. A lo largo de los años, la competencia entre empresas por dominar el mercado 
                impulsó la acelerada evolución de la web.
            </p>

            <h3>Principales Navegadores Históricos y Actuales</h3>
            <p>Evolución de los clientes web más representativos:</p>
            <ul>
                <li><strong>WorldWideWeb / Nexus (1990):</strong> El primer navegador y editor web creado por Tim Berners-Lee.</li>
                <li><strong>NCSA Mosaic (1993):</strong> Popularizó la web al permitir mostrar imágenes junto con el texto.</li>
                <li><strong>Netscape Navigator (1994):</strong> Dominó la web comercial e introdujo las bases de JavaScript.</li>
                <li><strong>Internet Explorer (1995):</strong> Protagonista de la primera gran guerra de navegadores.</li>
                <li><strong>Mozilla Firefox (2004):</strong> Alternativa de código abierto enfocada en la seguridad y estándares.</li>
                <li><strong>Google Chrome (2008):</strong> Lidera el mercado actual gracias a su velocidad y el motor V8.</li>
            </ul>

            <h3>Documental: La Guerra de los Navegadores</h3>
            <p>Puedes reproducir este video que explica a detalle la rivalidad entre Netscape, Internet Explorer y los navegadores modernos:</p>
            
            <div class="contenedor-video">
                <iframe 
                    width="100%" 
                    height="360" 
                    src="https://www.youtube.com/embed/NbHDJVquY0k" 
                    title="La historia completa de todos los navegadores web" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>

        </section>
    </main>

    <footer>
        Procesado en mi servidor local con XAMMP el 
        <strong><?php echo date("d/m/Y"); ?> a las <?php echo date("H:i:s"); ?> </strong>
    </footer>

</body>
</html>