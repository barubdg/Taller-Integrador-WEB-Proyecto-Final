<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>SIXCAR</title>
        <link href="../CSS/estilo_principal.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_pie_preguntasfrecuentes.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_cabezilla_2.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_video_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_menunavegacion_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_menudeseos_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_preguntasfrecuentes.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Etiqueta de idioma -->
        <meta name="language" content="es">
        
        <style>
            /*contenedores */
 
           #contenedorpreguntas{
                width: 101%;
                height: auto;
                background-color: #efeded; 
                margin-left: -7px;
                margin-top: -18px;
            }
            
            .colorpreguntafrecuente{
                background-color: #efeded; 
            }
            
        </style>
        
    </head>
    
    <body class="colorpreguntafrecuente">
        
        <div id="cabesilla">
            
            <header id="redessociales">
                
                <div id="iconface">
                    
                    <a href="https://www.facebook.com/profile.php?id=100084325667522&mibextid=LQQJ4d" target="_blank">
                        <img class="social-icon" src="../imagenes/face.png" alt="Facebook">
                    </a>
                    
                </div>
                
                <div id="iconinsta">
                    
                    <a href="https://instagram.com/radiadores_sixcar?igshid=MzRlODBiNWFlZA==" target="_blank">
                        <img class="social-icon-insta" src="../imagenes/insta.png" alt="Facebook">
                    </a>
                    
                </div>
                
                <div id="iconwsp">
                    <a href="https://wa.me/51955724311" target="_blank">
                        <img class="social-icon-wsp" src="../imagenes/whatsapp.png" alt=""/>
                    </a>
                    
                </div>
                
                <div id="iconfala">
                    
                    <a href="https://www.falabella.com.pe/falabella-pe/seller/RADIADORES%20SIXCAR" target="_blank">
                        <img class="social-icon-fala" src="../imagenes/fala1.png" alt=""/>
                    </a>
                </div>
                
                <div id="deseos">
                    
                    <li><a href="../operaciones/operaciones_preguntasfrecuentes.php?accionpregufrecu=getListpregufrecu">Lista de deseos</a></li>
                    
                </div>
                
            </header>
            
        </div>
            
        
        
        <div id="videoeimagen">
            
            <aside class="videoindex">
                
                <iframe 
                    
                    width="560" 
                    height="315" 
                    src="https://www.youtube.com/embed/0JFj1e9SXs8?si=383f1KB4YdMA0TZP" 
                    title="YouTube video player" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                        
                </iframe>
            
            </aside>
                
        </div>
        
        <div id="cuerpo">
            
            <div id="cuerpodos">
                
                <nav id="menu">
                
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../operaciones/producto_producto.php?accion=getList">Producto</a></li>
                    <li><a href="../servicios.php">Servicios</a></li>
                    <li><a href="../empresa.php">Empresa</a></li>
                    <li><a href="../contactanos.php">Contactanos</a></li>
                
                </nav>
            
            </div>
            
        </div>
        
        
        
        <div class="cuerpodeseos">
            
            <nav id="menudeseos">
                
                <ul>
                    <li><a href="../operaciones/operaciones_preguntasfrecuentes.php?accionpregufrecu=getListpregufrecu">Preguntas frecuentes</a></li>
                    <li><a href="../sugerencia.php">Libro de sugerencias</a></li>
                    <li><a href="../reclamos.php">Libro de reclamos</a></li>
                </ul>
                
            </nav>
        </div>
            
        
        
            
        <div id="contenedorpreguntas">
            
            <div id="pregu">
                
                <div class="acordeonpreguntafrecuente">
                    
                    <?php foreach ($listapregufrecu as $filapregufrecu) { ?>
                    <div class="bloquepreguntafrecuente">
                        
                        <h1 class="preguntatitular"><?php echo $filapregufrecu["preguntas"] ?></h1>
                        <p class="contenidopreguntas"><?php echo $filapregufrecu["respuestas"] ?></p>
                        
                    </div>
                    <?php } ?>
                    
                    
                    <div class="bloquepreguntafrecuente">
                        
                        <h1 class="preguntatitular">¿Cómo puedo ponerme en contacto con Sixcar para hacer preguntas o programar un servicio?</h1>
                        <p <p class="contenidopreguntas">
                            
                            Para hacer consultas, obtener información detallada sobre nuestros productos y servicios, 
                            o programar una cita, te ofrecemos varias opciones de contacto:
                            <br>
                            <br><strong>Teléfono:</strong> No dudes en llamarnos al número <strong>955724311</strong> para recibir 
                            asistencia personalizada.
                            <br>
                            <br><strong>Sección "Contáctanos" en Nuestra Página Web:</strong> Visita la sección 
                            "Contáctanos" en nuestro sitio web, donde encontrarás nuestras ubicaciones, números 
                            de teléfono y enlaces a nuestras redes sociales. Desde allí, podrás acceder a nuestros
                            diferentes canales de comunicación para hacernos preguntas o solicitar nuestros servicios.
                            <br>
                            <br><strong>Estamos comprometidos en brindarte múltiples vías de comunicación para garantizar que 
                            puedas contactarnos de la manera que te resulte más conveniente. Tu satisfacción y bienestar
                            son nuestra principal prioridad.</strong>
                        
                        </p>
                        
                    </div>
                    
                    <div class="bloquepreguntafrecuente">
                        
                        <h1 class="preguntatitular">¿Por qué comprar en la empresa Sixcar?</h1>
                        <p <p class="contenidopreguntas"><strong>Experiencia y Conocimiento Especializado:</strong> En Sixcar, contamos 
                            con años de experiencia en la industria de radiadores. Nuestro equipo está 
                            compuesto por expertos altamente capacitados y técnicos con un profundo 
                            conocimiento en radiadores y sistemas de enfriamiento. Podemos ofrecerte 
                            orientación experta y soluciones personalizadas para tus necesidades específicas.
                            <br>
                            <br><strong>Calidad y Confianza:</strong> Nos enorgullece ofrecer productos de alta calidad. Trabajamos en 
                            colaboración con los principales fabricantes de radiadores, lo que nos permite garantizar 
                            la calidad y durabilidad de nuestros productos. Nuestros radiadores cumplen con los estándares 
                            más exigentes de la industria, lo que te brinda la tranquilidad de saber que estás invirtiendo 
                            en productos confiables.
                            <br>
                            <br><strong>Amplia Gama de Productos:</strong>Sixcar ofrece una amplia selección de radiadores para una variedad
                            de marcas y modelos de vehículos. Ya sea que necesites un radiador de aluminio, de cobre-bronce 
                            o de plástico y aluminio, tenemos opciones disponibles para ti. Además, también ofrecemos piezas
                            y accesorios relacionados con sistemas de enfriamiento.
                            <br>
                            <br><strong>Servicios Completos:</strong> No solo somos un lugar donde comprar radiadores, sino que también 
                            ofrecemos servicios integrales. Esto incluye reparaciones de radiadores, diagnóstico de 
                            problemas de enfriamiento, instalación profesional y más. Estamos comprometidos en brindarte 
                            una experiencia completa y satisfactoria.
                            <br>
                            <br><strong>Atención al Cliente Personalizada:</strong> En Sixcar, valoramos a nuestros clientes y nos esforzamos
                            por proporcionar un servicio personalizado. Escuchamos tus necesidades y trabajamos contigo 
                            para encontrar la mejor solución. Nuestro equipo está disponible para responder a tus preguntas
                            y proporcionar asesoramiento en todo momento.
                            <br>
                            <br><strong>Garantía de Satisfacción:</strong> Respaldamos nuestros productos y servicios con garantías sólidas. 
                            Tu satisfacción es nuestra prioridad, y estamos dispuestos a trabajar contigo para resolver
                            cualquier problema que puedas enfrentar. Estamos comprometidos en brindarte la mejor experiencia 
                            de compra posible.
                            <br>
                            <br><strong>Compromiso con la Excelencia:</strong> En Sixcar, nos esforzamos constantemente por mantener los más
                            altos estándares de calidad y excelencia en todo lo que hacemos. Nuestra dedicación a la mejora
                            continua nos permite ofrecer productos y servicios de vanguardia que satisfacen las necesidades
                            cambiantes de nuestros clientes.
                            <br>
                            <br><strong>Comprar en Sixcar no solo significa adquirir productos de calidad, sino también recibir un 
                            servicio excepcional respaldado por experiencia y compromiso. Estamos aquí para ayudarte a 
                            mantener tu vehículo funcionando de manera óptima y garantizar tu satisfacción en cada paso 
                            del camino.</strong>
                        
                        </p>
                        
                    </div>
                    
                    
                    
                    
                </div>
                
                
                
                
                <script type="text/javascript">
                    
                    const bloquepreguntafrecuente = document.querySelectorAll('.bloquepreguntafrecuente');
                    const preguntatitular = document.querySelectorAll('.preguntatitular');
                    
                    
                    preguntatitular.forEach( (cadapreguntatitular, i)=>{
                        
                        preguntatitular[i].addEventListener('click', ()=>{
                            
                            bloquepreguntafrecuente.forEach( (cadabloquepreguntafrecuente, i)=>{
                             
                             bloquepreguntafrecuente[i].classList.remove('activo')
                             
                            })
                            
                            bloquepreguntafrecuente[i].classList.add('activo')
                            
                        })
                        
                    })
                    
                    
                </script>
                
                
                
                
                
            </div>
            
        </div>
        

        
        
        
        
        
        
        
        
        
        
        
        
        <div id="pies">
            
            <div id="logopies">
                
                <img id="logopiesimagen" src="./imagenes/logo2.jpg" />
                
            </div>
            
            <p id="textodireccion">Dirección:</p>
            <p id="textodireccionprincipal">Local principal:</p>
            <p id="textodireccionubicacion">Calle Huascar 128 independencia</p>
            <p id="textodireccionsede">Local 2:</p>
            <p id="textodireccionubicaciondos">Av. Alfredo Mendiola 4350 San Martín de Porres</p>
            
            <p id="textoredessociales">Redes sociales:</p>
            <p id="textofacebook">Facebook:</p>
            <p id="textoface">Radiadores Sixcar</p>
            <p id="textoinstagram">Instagram:</p>
            <p id="textoinsta">@radiadores_sixcar</p>
            
            <p id="textoaceptamos">Aceptamos:</p>
            <img id="visapie" src="./imagenes/visa-icon-sm.png" />
            <img id="mastercardpie" src="./imagenes/mastercard-icon-sm.png" />
            
            <p id="textotelefono">Telefono/Contactanos:</p>
            <p id="textowsp">Whatsapp:</p>
            <p id="textonumerowsp">+51-955724311</p>
            <p id="textocorreoelectronico">Correo Electrónico:</p>
            <p id="textocorreo">radiadoresjb06@gmail.com</p>
            
            
            
        </div>
            
        
        
        
    </body>
    
</html>
