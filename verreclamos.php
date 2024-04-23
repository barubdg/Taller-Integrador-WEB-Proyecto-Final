<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>SIXCAR</title>

        <link href="../CSS/estilo_pie_preguntasfrecuentes.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_cabezilla_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_video_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_menunavegacion_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_menudeseos_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_verreclamos.css" rel="stylesheet" type="text/css"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Etiqueta de idioma -->
        <meta name="language" content="es">

        <style>

            /*contenedores */

            .colorfondo{
                background-color: #efeded;
            }

            .contenedor_de_reclamos_bd{

            }

        </style>

    </head>

    <body class="colorfondo">

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


        <div class="reclamo_general">
            <!--action="https://formsubmit.co/pitersonalcoser@gmail.com"-->
            <div class="reclamos">
                <h1>Libro de Reclamos</h1>
                <form id="formularioreclamos" action="../operaciones/operaciones.php" method="POST" enctype="multipart/form-data">
                    <label for="nombrereclamo">Nombre:</label>
                    <input type="text" id="nombrereclamo" name="nombrereclamos" required>

                    <label for="correoreclamo">Correo electrónico:</label>
                    <input type="email" id="correoreclamo" name="correoreclamos" required> 

                    <label for="reclamo">Reclamo:</label>
                    <textarea id="reclamo" name="reclamo" required></textarea>

                    <label for="imagenreclamo">Subir una imagen (opcional):</label>
                    <input type="file" id="imagenreclamo" name="imagenreclamo">

                    <input type="hidden" name="_next" value="http://localhost/sixcar/sugerencia.php">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="accionreclamo"  value="addreclamo"/>
                    <input type="submit" id="enviarreclamo" value="enviar reclamo" name="enviarimagenreclamo">
                    
                </form>
            </div>


            <p class="nombre_recla_bd">Nombres de los Usuarios que llenaron el formulario</p>

            <div class="reclamoBD">
                <?php foreach ($listareclamos as $filareclamo) { ?>

                    <div class="contenedor_de_nombres_reclamo_bd">
                        <div class="contenedornombrereclamo"><?php echo $filareclamo["nombre_usuario_reclamo"] ?></div>
                    </div>    

                <?php } ?>
            </div>


            <p class="reclamo_recla_bd">Reclamos de los Usuarios que llenaron el formulario</p>

            <div class="reclamoreclamoBD">
                <?php foreach ($listareclamos as $filareclamo) { ?>             

                    <div class="contenedor_de_reclamo_reclamo_bd">
                        <div class="contenedorreclamoreclamo"><?php echo $filareclamo["reclamos"] ?></div>
                    </div> 

                <?php } ?>
            </div>



        </div>








        <div id="pies">

            <div id="logopies">

                <img id="logopiesimagen" src="../imagenes/logo2.jpg" />

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
            <img id="visapie" src="../imagenes/visa-icon-sm.png" />
            <img id="mastercardpie" src="../imagenes/mastercard-icon-sm.png" />

            <p id="textotelefono">Telefono/Contactanos:</p>
            <p id="textowsp">Whatsapp:</p>
            <p id="textonumerowsp">+51-955724311</p>
            <p id="textocorreoelectronico">Correo Electrónico:</p>
            <p id="textocorreo">radiadoresjb06@gmail.com</p>



        </div>




    </body>

</html>
