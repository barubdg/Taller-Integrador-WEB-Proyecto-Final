<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>SIXCAR</title>
        <link href="./CSS/estilo_pie_preguntasfrecuentes.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_cabezilla_5.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_video_3.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_menunavegacion_2.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_menudeseos_3.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_sugerencias.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Etiqueta de idioma -->
        <meta name="language" content="es">

        <style>

            /*contenedores */

            #colorcontenedorpreguntas{
                background-color: #efeded;
            }

        </style>

    </head>

    <body id="colorcontenedorpreguntas">

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



        <div class="cuerpodeseos">

            <nav id="menudeseos">

                <ul>
                    <li><a href="./operaciones/operaciones_preguntasfrecuentes.php?accionpregufrecu=getListpregufrecu">Preguntas frecuentes</a></li>
                    <li><a href="./sugerencia.php">Libro de sugerencias</a></li>
                    <li><a href="./reclamos.php">Libro de reclamos</a></li>
                </ul>

            </nav>

        </div>


        <div class="sugerencias">
            <h1>Libro de Sugerencias</h1>
            <!--    action="https://formsubmit.co/pitersonalcoser@gmail.com"-->
            <form action="operaciones/operaciones_sugerencias.php" method="POST" enctype="multipart/form-data">
                <label for="nombresugerencia">Nombre:</label>
                <input type="text" id="nombresugerencia" name="nombresugerencia" required>

                <label for="correosugerencia">Correo electrónico:</label>
                <input type="email" id="correosugerencia" name="correosugerencia" required>

                <label for="sugerencia">Sugerencia:</label>
                <textarea id="sugerencia" name="sugerencia" required></textarea>

                <label for="imagensugerencia">Subir una imagen (opcional):</label>
                <input type="file" id="imagensugerencia" name="imagensugerencia">

                

                <input type="hidden" name="_next" value="http://localhost/sixcar/sugerencia.php">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="accion"  value="add"/>
                <input type="submit" id="enviarsugerencia" value="enviar sugerencia" name="enviarimagensugerencia">
            
            </form>
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
