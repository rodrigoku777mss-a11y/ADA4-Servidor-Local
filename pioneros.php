<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pioneros</title>
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
            <h2>Pioneros y Creadores de las Tecnologías Web</h2>
            <p>
                El ecosistema web actual existe gracias a las aportaciones de visionarios e ingenieros que 
                diseñaron los protocolos, lenguajes y herramientas que utilizamos a diario.
            </p>

            <h3>Tabla de Personajes Clave</h3>
            <p>A continuación se presenta un resumen estructurado de las figuras más influyentes:</p>

            <table class="tabla-pioneros">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Aporte</th>
                        <th>Año</th>
                        <th>Tecnología / Proyecto</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>
                            <img src="media/Tim Berners-Lee.webp" alt="Tim Berners-Lee" class="foto-pionero">
                            <br><strong>Tim Berners-Lee</strong>
                        </td>
                        <td> Invento de la World Wide Web, primer servidor y cliente web</td>
                        <td> 1989 - 1991</td>
                        <td> HTML, HTTP, URL</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="media/RobertCailliau.jpg" alt="Robert Cailliau" class="foto-pionero">
                            <br><strong>Robert Cailliau</strong>
                        </td>
                        <td>Co-diseñador del proyecto WWW y colaborador en el CERN</td>
                        <td>1990</td>
                        <td>Sistema de hipertexto</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="media/MarcAndreessen.jpg" alt="Marc Andreessen" class="foto-pionero">
                            <br><strong>Marc Andreessen</strong>
                        </td>
                        <td>Coautor de NCSA Mosaic, el primer navegador gráfico masivo</td>
                        <td>1993</td>
                        <td>NCSA Mosaic / Netscape</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="media/BrendanEich.jpg" alt="Brendan Eich" class="foto-pionero">
                            <br><strong>Brendan Eich</strong>
                        </td>
                        <td>Creación del lenguaje de programación JavaScript en 10 días</td>
                        <td>1995</td>
                        <td>JavaScript (Mocha/LiveScript)</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="media/HåkonWiumLie.jpg" alt="Håkon Wium Lie" class="foto-pionero">
                            <br><strong>Håkon Wium Lie</strong>
                        </td>
                        <td>Propuesta inicial de las Hojas de Estilo en Cascada</td>
                        <td>1994 - 1996</td>
                        <td>CSS (Cascading Style Sheets)</td>
                    </tr>

                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="4">
                            <em>Nota: Datos recopilados de los archivos históricos del W3C y MDN Web Docs</em>
                        </td>
                    </tr>
                </tfoot>

            </table>


        </section>
    </main>

    <footer>
        Procesado en mi servidor local con XAMMP el 
        <strong><?php echo date("d/m/Y"); ?> a las <?php echo date("H:i:s"); ?> </strong>
    </footer>

</body>
</html>