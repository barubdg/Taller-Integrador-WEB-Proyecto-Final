<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Sixcar</title>
        <link href="./CSS/estilo_modal.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_pie_servicios.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_cabezilla_1.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_video_1.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_menunavegacion_1.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_servicios.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Etiqueta de idioma -->
        <meta name="language" content="es">

        <style>

            .colorfondo{

                background-color: #efeded;

            }

        </style>



    </head>

    <body class="colorfondo">

        <div id="cabesilla">

            <header id="redessociales">

                <div id="iconface">

                    <a href="https://www.facebook.com/profile.php?id=100084325667522&mibextid=LQQJ4d" target="_blank">
                        <img class="social-icon" src="./imagenes/face.png" alt="Facebook">
                    </a>

                </div>

                <div id="iconinsta">

                    <a href="https://instagram.com/radiadores_sixcar?igshid=MzRlODBiNWFlZA==" target="_blank">
                        <img class="social-icon-insta" src="./imagenes/insta.png" alt="Facebook">
                    </a>

                </div>

                <div id="iconwsp">
                    <a href="https://wa.me/51955724311" target="_blank">
                        <img class="social-icon-wsp" src="./imagenes/whatsapp.png" alt=""/>
                    </a>

                </div>

                <div id="iconfala">

                    <a href="https://www.falabella.com.pe/falabella-pe/seller/RADIADORES%20SIXCAR" target="_blank">
                        <img class="social-icon-fala" src="./imagenes/fala1.png" alt=""/>
                    </a>
                </div>

                <div id="deseos">

                    <li><a href="./operaciones/operaciones_preguntasfrecuentes.php?accionpregufrecu=getListpregufrecu">Lista de deseos</a></li>

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

                    <li><a href="./index.php">Inicio</a></li>
                    <li><a href="./operaciones/producto_producto.php?accion=getList">Producto</a></li>
                    <li><a href="./servicios.php">Servicios</a></li>
                    <li><a href="./empresa.php">Empresa</a></li>
                    <li><a href="./contactanos.php">Contactanos</a></li>

                </nav>

            </div>

        </div>



























        <div id="contenedormenusdos" >

            <div id="contenedorservicios">


                <p>NUESTROS SERVICIOS</p>

                <h4>Nuestra empresa Sixcar ofrece servicios variados, desde la venta y reparación de 
                    radiadores, hasta mantenimientos de vehiculos automorotes, bridando un precio comodo 
                    para nuestros clientes y una trabajo rapido, honesto y eficaz para todos y todas. Nosotros nos 
                    encargaremos de resolver tus problemas de tu vehiculo para que no te mates haciendolo por tu cuenta.</h4>

                <h3>NOSOTROS ESTAMOS PARA TI</h3>

                <div class="linea-separador"></div>

                <h3>NOSOTROS TRABAJAMOS POR TI</h3>

                <div id="servicio1" onclick="mostrarmodal()">

                    <img id="mantenimientocarros" src="./imagenes/mantenimiento.jpg" />
                    <div for="texto-hover" class="texto-hover">Mantenimiento preventivo de:<br>Radiadores</div>

                </div>                

                <div id="servicio2" onclick="mostrarmodal2()">

                    <img id="reparacionradiador" src="./imagenes/reparacionradiador.jpg" />
                    <div class="texto-hover2">Mantenimiento preventivo de:<br>bomba de agua</div>                

                </div>

                <div id="servicio3" onclick="mostrarmodal3()">

                    <img id="ventaradiador" src="./imagenes/ventaradiadores.jpg" />
                    <div class="texto-hover3">Mantenimiento preventivo de:<br>Termostato</div>

                </div>

                <div id="servicio4" onclick="mostrarmodal4()">

                    <img id="cambioradiador" src="./imagenes/cambioradiador.jpg" />
                    <div class="texto-hover4">Mantenimiento preventivo de:<br>Bridas</div>

                </div>

                <div id="servicio5" onclick="mostrarmodal5()">

                    <img id="cambiorefrigerante" src="./imagenes/cambiorefrigerante.jpg" />
                    <div class="texto-hover5">Mantenimiento preventivo de:<br>Mangueras</div>

                </div>

            </div>

        </div>






        <div class="modal">

            <div class="contenedormodal">

                <!--                <header >
                                    
                                    <p class="textomodal">El mantenimiento preventivo de radiadores</p>
                
                
                                </header>-->
                <div class="textocontenedormodal">

                    <div class="imagenmodal">

                        <img src="imagenes/mantenimiento.jpg" alt="" width="500px">

                    </div>

                </div>

                <label for="btn-modal" onclick="cerrarmodal()">x</label>

                <div class="contenido">

                    <div class="textomodal">

                        <br> <b>Mantenimiento Preventivo de Radiadores: </b>
                        <br>
                        <br> <b>1. Inspección Visual:</b>
                        Realizar inspecciones regulares para identificar posibles signos de corrosión, fugas, daños en las aletas y acumulaciones de suciedad.
                        Verificar la integridad estructural del radiador.
                        <br>
                        <br> <b>2. Limpieza de Aletas y Conductos:</b>
                        Limpiar las aletas y conductos del radiador para eliminar acumulaciones de polvo, insectos y otros contaminantes.
                        Utilizar aire comprimido, cepillos y productos de limpieza no corrosivos.
                        <br>
                        <br> <b>3. Pruebas de Presión:</b>
                        Realizar pruebas periódicas de presión para identificar y corregir posibles fugas en el sistema de refrigeración.
                        Verificar la capacidad del radiador para manejar la presión normal de funcionamiento.
                        <br>
                        <br> <b>4. Reemplazo del Refrigerante:</b>
                        Programar cambios regulares del refrigerante según las recomendaciones del fabricante.
                        Asegurarse de que el refrigerante utilizado sea compatible con las especificaciones del radiador.

                    </div>

                </div>

            </div>

        </div>

        <div class="modal2">

            <div class="contenedormodal">

                <div class="textocontenedormodal">

                    <div class="imagenmodal">

                        <img src="imagenes/reparacionradiador.jpg" alt="" width="500px">

                    </div>

                </div>
                <label for="btn-modal" onclick="cerrarmodal2()">x</label>

                <div class="contenido">

                    <div class="textomodal">

                        <br> <b>Mantenimiento Preventivo de Bomba de Agua: </b>
                        <br>
                        <br> <b>1. Inspección Visual: </b>
                        Realizar inspecciones regulares para detectar signos de desgaste, corrosión o daños en la bomba y sus componentes.
                        Verificar la presencia de fugas en las conexiones y juntas.
                        <br>
                        <br> <b>2. Lubricación: </b>
                        Asegurarse de que los puntos de lubricación estén adecuadamente lubricados para prevenir el desgaste prematuro de rodamientos y sellos.
                        Utilizar el lubricante recomendado por el fabricante.
                        <br>
                        <br> <b>3. Alineación del Motor y la Bomba: </b>
                        Verificar y corregir la alineación entre el motor y la bomba para evitar vibraciones excesivas.
                        Las vibraciones pueden causar daños a los rodamientos y afectar el rendimiento.
                        <br>
                        <br> <b>4. Pruebas de Funcionamiento: </b>
                        Realizar pruebas regulares para asegurarse de que la bomba arranque y opere correctamente.
                        Verificar el caudal y la presión para garantizar un rendimiento óptimo.

                    </div>

                </div>

            </div>

        </div>

        <div class="modal3">

            <div class="contenedormodal">

                <div class="textocontenedormodal">

                    <div class="imagenmodal">

                        <img src="imagenes/ventaradiadores.jpg" alt="" width="500px">

                    </div>

                </div>
                <label for="btn-modal" onclick="cerrarmodal3()">x</label>

                <div class="contenido">

                    <div class="textomodal">


                        <br><b>Mantenimiento Preventivo de Termostato:</b>
                        <br>
                        <br> <b>1. Inspección Visual: </b>
                        <br>
                        <br>Realizar inspecciones regulares para identificar posibles signos de desgaste, corrosión o daños en el termostato y sus conexiones.
                        Verificar la integridad de los cables y conexiones eléctricas asociadas.

                        <br>
                        <br> <b>2. Pruebas de Funcionamiento: </b>
                        Realizar pruebas periódicas del termostato para asegurarse de que abra y cierre correctamente en respuesta a cambios de temperatura.
                        Verificar que el termostato activa y desactiva el sistema de refrigeración según lo diseñado.
                        <br>
                        <br> <b>3. Calibración: </b>
                        Calibrar el termostato según las especificaciones del fabricante para garantizar una lectura precisa de la temperatura.
                        Asegurarse de que el termostato responda con precisión a los cambios en la temperatura ambiente.
                        <br>
                        <br> <b>4. Limpieza: </b>
                        Limpiar cualquier acumulación de suciedad, polvo o residuos en el termostato que pueda afectar su funcionamiento.
                        Prestar especial atención a las áreas alrededor del bulbo o sensor de temperatura.

                    </div>

                </div>

            </div>

        </div>

        <div class="modal4">

            <div class="contenedormodal">

                <div class="textocontenedormodal">

                    <div class="imagenmodal">

                        <img src="imagenes/ventaradiadores.jpg" alt="" width="500px">

                    </div>

                </div>
                <label for="btn-modal" onclick="cerrarmodal4()">x</label>

                <div class="contenido">

                    <div class="textomodal">

                        <br> <b>Mantenimiento Preventivo de Bridas: </b>
                        <br>
                        <br> <b>1. Inspección Visual: </b>
                        <br>
                        Realizar inspecciones regulares para identificar posibles signos de corrosión, desgaste, fisuras o daños en las bridas y sus componentes.
                        Verificar la integridad de los pernos, tuercas y juntas.
                        <br>
                        <br> <b>2. Limpieza: </b>
                        Limpiar cualquier acumulación de suciedad, polvo o residuos alrededor de las bridas que pueda afectar la sujeción o el sellado.
                        Utilizar métodos y herramientas adecuadas para eliminar cualquier corrosión superficial.
                        <br>
                        <br> <b>3. Aplicación de Lubricantes Anticorrosivos: </b>
                        Aplicar lubricantes anticorrosivos en los pernos y tuercas para prevenir la formación de óxido y facilitar futuras operaciones de mantenimiento.
                        Utilizar productos recomendados por el fabricante.
                        4. Verificación de Tensión de Pernos:
                        Verificar la tensión de los pernos utilizando herramientas de medición adecuadas.
                        Ajustar la tensión según las especificaciones del fabricante para garantizar una sujeción segura.

                    </div>

                </div>

            </div>

        </div>

        <div class="modal5">

            <div class="contenedormodal">

                <div class="textocontenedormodal">

                    <div class="imagenmodal">

                        <img src="imagenes/cambiorefrigerante.jpg" alt="" width="500px">

                    </div>

                </div>
                <label for="btn-modal" onclick="cerrarmodal5()">x</label>

                <div class="contenido">

                    <div class="textomodal">

                        <br> <b>Mantenimiento Preventivo de Mangueras: </b>
                        <br>
                        <br> <b>1. Inspección Visual: </b>
                        Realizar inspecciones regulares para identificar posibles signos de desgaste, fisuras, hinchazón, o daños visibles en las mangueras.
                        Verificar la integridad de las conexiones y abrazaderas.
                        <br>
                        <br> <b>2. Pruebas de Flexión y Presión: </b>
                        Realizar pruebas de flexión en las mangueras para detectar posibles grietas o áreas endurecidas.
                        Realizar pruebas de presión para asegurar que las mangueras puedan soportar la presión de funcionamiento sin fugas.
                        <br>
                        <br> <b>3. Reemplazo Regular: </b>
                        Establecer un programa de reemplazo regular de las mangueras basado en las recomendaciones del fabricante y el historial de uso.
                        Reemplazar mangueras en mal estado o que estén fuera de su vida útil esperada.
                        <br>
                        <br> <b>4. Chequeo de Conexiones: </b>
                        Inspeccionar las conexiones de las mangueras para asegurar un sellado adecuado y prevenir posibles fugas.
                        Ajustar o reemplazar abrazaderas según sea necesario.

                    </div>

                </div>

            </div>

        </div>



        <script type="text/javascript">

            function mostrarmodal() {
                const modal = document.querySelector('.modal');
                modal.style.opacity = 1; // Cambia el ancho a 400px
                modal.style.visibility = 'visible';
            }

            function cerrarmodal() {
                const modal = document.querySelector('.modal');
                modal.style.opacity = 0; // Cambia el ancho a 400px
                modal.style.visibility = 'hidden';
            }

            function mostrarmodal2() {
                const modal2 = document.querySelector('.modal2');
                modal2.style.opacity = 1; // Cambia el ancho a 400px
                modal2.style.visibility = 'visible';
            }

            function cerrarmodal2() {
                const modal2 = document.querySelector('.modal2');
                modal2.style.opacity = 0; // Cambia el ancho a 400px
                modal2.style.visibility = 'hidden';
            }

            function mostrarmodal3() {
                const modal3 = document.querySelector('.modal3');
                modal3.style.opacity = 1; // Cambia el ancho a 400px
                modal3.style.visibility = 'visible';
            }

            function cerrarmodal3() {
                const modal3 = document.querySelector('.modal3');
                modal3.style.opacity = 0; // Cambia el ancho a 400px
                modal3.style.visibility = 'hidden';
            }

            function mostrarmodal4() {
                const modal4 = document.querySelector('.modal4');
                modal4.style.opacity = 1; // Cambia el ancho a 400px
                modal4.style.visibility = 'visible';
            }

            function cerrarmodal4() {
                const modal4 = document.querySelector('.modal4');
                modal4.style.opacity = 0; // Cambia el ancho a 400px
                modal4.style.visibility = 'hidden';
            }

            function mostrarmodal5() {
                const modal5 = document.querySelector('.modal5');
                modal5.style.opacity = 1; // Cambia el ancho a 400px
                modal5.style.visibility = 'visible';
            }

            function cerrarmodal5() {
                const modal5 = document.querySelector('.modal5');
                modal5.style.opacity = 0; // Cambia el ancho a 400px
                modal5.style.visibility = 'hidden';
            }

        </script>
























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
