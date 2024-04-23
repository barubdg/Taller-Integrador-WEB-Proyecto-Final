<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Sixcar</title>
        <link href="../CSS/estilo_productos.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_pie_servicios.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_cabezilla_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_video_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_menunavegacion_1.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Etiqueta de idioma -->
        <meta name="language" content="es">

        <style>

            .colorfondo{

                background-color: #efeded;

            }

            #titulonisan{
                width: 60vw;
                height: 6vw;
                font-size: 3.5vw;
                text-align: center;
                /*    text-decoration: underline;*/
                font-family: bold;
                margin-top: 1vw;
                margin-bottom: 0.5vw;
                margin-left: 15vw;
                margin-right: 15vw;
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







        <div id="contenedormenusdos" >

            <div id="contenedormenusproducto">

                <p id="titulonisan">NISSAN</p>






                <?php foreach ($listanissan as $filanissan) { ?>
                    <div class="producto">
                        <img src="../nissan/<?php echo $filanissan["nissan"] ?>" alt=""/>
                        <div class="contenedornombre"><p class="nombreproducto"><?php echo $filanissan["nombre_nissan"] ?></p> </div>
                        <p class="codigoproducto">Codigo del producto: <?php echo $filanissan["codigo_nissan"] ?></p>
                        <p class="precioproducto"><?php echo $filanissan["precio_nissan"] ?></p>
                    </div>   
                <?php } ?>





                <div class="producto15">
                    <a href="../productos_radiadores.php" class="custom-link">
                        <div class="produ15">
                            <img src="../imagenes/producto15.png" alt=""/>
                            <p class="nombreproducto15">Regresar a los Radiadores</p>
                            <p class="productoradiadores15">Click para visualizar todos los radiadores que ofrecemos</p>
                        </div>
                    </a>

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
