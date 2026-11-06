<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Evolucion y Tecnologias Web</h1>
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
            <h2> Historia y Evolucion de la World Wide Web</h2>
            <p>
                Desde la creación de la primera página web por <strong>Tim Berners-Lee</strong> en 1991, 
                la web ha pasado por una transformación impresionante. <em>Con el paso de las décadas</em>, 
                hemos transitado de documentos de texto estáticos a aplicaciones web complejas e interactivas.
            </p>

            <h3>Linea del Tiempo</h3>
            <p>
                A continuación les presento mi linea del tiempo visual con los <strong>10 momentos más importantes</strong> 
                en la historia del desarrollo web:
            </p>

            <div class="contenedor-linea-tiempo">
                <img src="media/linea-tiempo.jpg" alt="Línea del tiempo" class="imagen-linea">
            </div>

            <h3> Etapas más importantes de la WWW </h3>
            <ul>
                <li><strong>El nacimiento de la World Wide Web: </strong> La propuesta de Tim Berners-Lee y el desarrollo de sus pilares (HTML, HTTP y URL) fueron fundamentales porque sentaron las bases para estructurar, localizar e intercambiar información a nivel global. </li>
                <li><strong>El salto de la Web 1.0 a la Web 2.0: </strong> Representó un cambio de paradigma determinante, al transformar una red estática (solo lectura) a una plataforma participativa, dinámica y colaborativa impulsada por el contenido generado por los propios usuarios se me hace maravilloso. Recuerdo con nostalgia los primeros inicios de Facebook y YouTube. </li>
                <li><strong>La adaptación a la Web Móvil: </strong> Esta etapa siento que explotó el acceso a Internet. Llevó la red literalmente al alcance de nuestras manos en cualquier lugar, rompiendo la barrera de depender de un pc e integrando a personas de todas las generaciones (desde jóvenes hasta adultos mayores). Recuerdo que mis padres antes me regañaban por usar mi teléfono y ahora ellos no lo sueltan ni para comer. </li>
            </ul>

        </section>

    </main>

    <footer>
        Procesado en mi servidor local con XAMMP el 
        <strong><?php echo date("d/m/Y"); ?> a las <?php echo date("H:i:s"); ?> </strong>
    </footer>
</body>
</html>