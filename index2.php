<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de Higiene Industrial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="css/estilos.css">
    <
</head>
<body>
   <header>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Logo de la Empresa">
            </div>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#nosotros">Sobre Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li>IDIOMAS</li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="hero">
        <div class="container">
            <h1>La Mejor Solución en Higiene Industrial</h1>
            <p>Comprometidos con la excelencia y la limpieza profesional.</p>
            <a href="#contacto" class="cta">Contáctanos</a>
        </div>
    </section>
    <section id="nosotros">
        <div class="container">
            < <div class="container">
        <h1>Sobre Nosotros</h1>
        <p>En <span class="empresa">Higiene Industrial Lobo</span>, nos especializamos en la distribución de productos químicos y de limpieza, celulosa, desechables y productos de hostelería. Desde nuestros humildes comienzos, hemos trabajado con dedicación para ofrecer un servicio confiable y personalizado tanto a particulares como a empresas.</p>
        <p>Antes de fundar <span class="empresa">Higiene Industrial Lobo</span>, trabajamos en diversos sectores, pero siempre sentimos que queríamos crear algo propio. Así nació esta empresa. Nos apasiona la interacción cara a cara con los clientes, y vimos una oportunidad de negocio en la creciente demanda de productos de higiene industrial.</p>
        <p>Con más de 11 años en el mercado, hemos crecido gracias a la confianza de nuestros clientes y a la creciente demanda de nuestros productos. 
        Nos enfocamos en llevar los pedidos directamente a la puerta de nuestros clientes, ofreciendo un servicio flexible y totalmente adaptado a sus necesidades. No importa lo que necesiten, estamos aquí para conseguirlo.</p>
        <p>Antes de nuestra existencia, las empresas tenían que recurrir a grandes proveedores, lo cual era menos conveniente y personal. Queríamos ofrecer una alternativa más cercana y cómoda, llevando los productos directamente a nuestros clientes. Desde 2013, hemos estado dedicados a esta empresa y estamos orgullosos del progreso que hemos logrado y entusiasmados por el futuro que tenemos por delante.</p>
        <p>Nuestro compromiso es estar disponibles desde el amanecer hasta el anochecer, siempre encontrando un momento para atender las necesidades de nuestros clientes. Nos enorgullece la fiabilidad y la dedicación con la que hemos construido nuestra reputación, y seguimos trabajando duro para mantener y mejorar nuestro servicio.</p>
        <p>Si necesitas algo, no dudes en <a href=#contacto">contactarnos</a>. Estamos aquí para ayudarte a encontrar lo que necesitas y para asegurarnos de que recibas el mejor servicio posible.</p>
    </div>
        </div>
    </section>
    <section id="servicios">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="service-item">
                <h3>Limpieza Industrial</h3>
                <p>Ofrecemos servicios de limpieza profunda para instalaciones industriales.</p>
            </div>
            <div class="service-item">
                <h3>Desinfección</h3>
                <p>Servicios de desinfección con productos certificados y personal capacitado.</p>
            </div>
            <div class="service-item">
                <h3>Suministro de Productos</h3>
                <p>Proveemos productos de higiene industrial de alta calidad.</p>
            </div>
        </div>
    </section>
    <section id="contacto">
    <h2>Contacto</h2>
        <p style="text-align: center;">Para cualquier consulta o pedido, no dudes en contactarnos. Estamos disponibles para atenderte desde el amanecer hasta el anochecer.</p>
        <p style="margin-left:150px;"><strong >Teléfono:</strong> <a href="tel:+34 123 456 789">123456789</a></p>
        <p style="margin-left:150px;"><strong>Correo Electrónico:</strong> info@higieneindustriallobo.com</p>

        <h2>Formulario de Contacto:</h2>
        <form action="enviar_contacto.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br><br>
            
            <input type="submit" value="Enviar">
        </form>

        <h2>Redes Sociales:</h2>
        <ul>
            <li><a href="https://www.facebook.com/HigieneIndustrialLobo" target="_blank">Facebook</a></li>
            <li><a href="https://www.twitter.com/HigieneLobo" target="_blank">Twitter</a></li>
            <li><a href="https://www.linkedin.com/company/higiene-industrial-lobo" target="_blank">LinkedIn</a></li>
        </ul>

        <h2>Horario de Atención:</h2>
        <p>Desde el amanecer hasta el anochecer.</p>
    </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Empresa de Higiene Industrial. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
