<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Sixcar</title>

        <!-- link para el icono del carrito -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined"/>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <link href="carritocompras/estilo_carrito.css" rel="stylesheet" type="text/css"/>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="../carritocompras/carritocompr.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_productos.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_pie_servicios.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_cabezilla_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_video_1.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo_menunavegacion_1.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Etiqueta de idioma -->
        <meta name="language" content="es">

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" type="text/javascript"></script>
        <script src="../javascript/navegacioncontabs.js" type="text/javascript"></script>

        <style>

            .colorfondo{

                background-color: #efeded;

            }

            #botonagregar{

                border: 1px solid black;
                background-color: #0033ff;
                height: 2vw;
                width: 12vw;
                margin: 0 auto;
                border-radius: 7px;
                border-color: #0033ff;
                color:#ffffff;
                font-family: sans-serif;
                font-size: 1vw;
                font-weight: bold;

            }

            .contenedorcarritocompra:hover{

                transform: scale(1.2, 1.2);
                cursor: pointer;

            }

            .carritocompra{

                margin-left: 0.3vw;
                margin-top: 0.2vw;
                position: absolute;
                color: #ffffff;
            }




        </style>

    </head>



    <body class="colorfondo">


        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="../carritocompras/carritocompras.js" type="text/javascript"></script>


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

                <nav id="menu" class="men">

                    <li><a href="../index.php">Inicio</a></li>
                    <li><span href="#muestra1" ><a href="../operaciones/producto_producto.php?accion=getList">Producto</a></span></li>
                    <li><a href="../servicios.php">Servicios</a></li>
                    <li><a href="../empresa.php">Empresa</a></li>
                    <li><a href="../contactanos.php">Contactanos</a></li>

                </nav>



            </div>

        </div>







        <div id="contenedormenusdos" class="contenedormenusproductosdos">


            <div class="img-carrito-compras" onclick="mostrar()">

                <span class="material-icons-outlined iconocarritocompra">
                    shopping_cart
                </span>

                <button type="button" id="botoncarritocompra" class="botoncarritocom"></button>

            </div>

            <div class="contador-carrito">

                <h3 class="cont-num-carrito">10</h3>

            </div>





            <div id="mostrar-compras">

                <div class="header-carrito">
                    
                    <h2>Tu Carrito</h2>
                    
                </div>
                
                <div class="carrito-items">
                    
                    <div class="carritoitem">
                        
                        <img  src="../imagenes/anticongelante.jpg" alt="" width="80px;" >
                        
                        <div class="item-carrito-detalle">
                            
                            <span class="carrito-item-titulo"> ventilador</span>
                            
                            <div class="selector-cantidad">
                                
                                <i class="fa-solid fa-minus restar-cantidad"></i>
                                <input type="text" value="1" class="carrito-cantidad-num" disabled="">
                                <i class="fa-solid fa-plus sumar-cantidad"></i>
                                
                            </div>
                            
                            <span class="carrito-precio">S/150.00</span>
                            
                        </div>
                        
                        <span class="btn-eliminar-carrito">
                            
                            <i class="fa-solid fa-trash basura-carrito"></i>
                            
                        </span>
                        
                    </div>
                    
                    <div class="carritoitem">
                        
                        <img  src="../imagenes/producto14.png" alt="" width="80px;" >
                        
                        <div class="item-carrito-detalle">
                            
                            <span class="carrito-item-titulo"> anti congelante</span>
                            
                            <div class="selector-cantidad">
                                
                                <i class="fa-solid fa-minus restar-cantidad"></i>
                                <input type="text" value="2" class="carrito-cantidad-num" disabled="">
                                <i class="fa-solid fa-plus sumar-cantidad"></i>
                                
                            </div>
                            
                            <span class="carrito-precio">S/50.00</span>
                            
                        </div>
                        
                        <span class="btn-eliminar-carrito">
                            
                            <i class="fa-solid fa-trash basura-carrito"></i>
                            
                        </span>
                        
                    </div>
                    
                    <div class="carrito-total">
                        
                        <div class="fila-total">
                            
                            <strong>Tu Total</strong>
                            <span class="carrito-percio-total">
                                
                                S/200.00
                                
                            </span>
                            
                        </div>
                        
                        <button class="btn-comprar-items">Comprar <i class="fa-solid fa-bag-shopping"></i></button>
                        
                    </div>
                    
                </div>
                
            </div>











            <div id="muestra1" class="clickon">

                <div id="contenedormenusproducto" class="contenedordemuestra">


                    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
                    <script src="carritocompras/carritocompras.js" type="text/javascript"></script>

                    <p id="tituloproducto">Visualiza y compra los PRODUCTOS que te interesen de nuestra empresa SIXCAR</p>




                    <?php foreach ($listaproducto as $filaproducto) { ?>


                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">
                            <div class="producto blog-post">
                                <img src="../imagenes/<?php echo $filaproducto["producto"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre">
                                    <p class="nombreproducto"><?php echo $filaproducto["nombre_producto"] ?></p>
                                </div>
                                <p class="precioproductoducto">S/<?php echo $filaproducto["precio_producto"] ?></p>
                                <div class="contenedorcarritocompra"><!--
                                    <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>



                    <div class="producto15">
                        <!--                        <a href="../operaciones/producto_ventiladores.php?accionventilador=getListventilador"" class="custom-link">-->
                        <a href="#muestra2"" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto2.png" alt=""/>
                                <p class="nombreproducto15">Ventiladores</p>
                                <p class="productoradiadores15">Click para visualizar todos los "Ventiladores" que ofrecemos</p>
                            </div>
                        </a>

                    </div>


                    <div class="producto15">
                        <!--                        <a href="../productos_radiadores.php" class="custom-link">-->
                        <a href="#muestra3" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Radiadores</p>
                                <p class="productoradiadores15">Click para visualizar todos los "Radiadores" que ofrecemos</p>
                            </div>
                        </a>

                    </div>

                    <div class="separadorproductos"> 
                        <h1 class="tituloproducto2">También contamos con diversidad de ciertos productos</h1>
                    </div>

                    <?php foreach ($listadiversidad as $filadiversidad) { ?>

                        <div class="producto">
                            <img src="../imagenes/<?php echo $filadiversidad["producto_muestra"] ?>" alt=""/>
                            <div class="contenedornombre"><p class="nombreproductodiversidad"><?php echo $filadiversidad["nombre_muestra"] ?></p> </div>
                            <p class="descriproducto"><?php echo $filadiversidad["descripcion_muestra"] ?></p>
                        </div>

                    <?php } ?>


                    <a href="https://wa.me/51955724311" target="_blank">
                        <h2 class="diversidadwsp">Para más información acerca de estos productos, haz click aquí para dirigirte a nuestro WhatsApp</h2>
                    </a>




                </div>

            </div>

            <div id="muestra2" class="clickon">

                <div id="contenedormenusproducto"  class="contenedordemuestra">

                    <p id="tituloproducto">Visualiza y compra nuestros VENTILADORES en nuestra empresa SIXCAR</p>

                    <?php foreach ($listaVentilador as $filaVentilador) { ?>
                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">

                            <div class="producto">
                                <img src="../ventiladores/<?php echo $filaVentilador["ventilador"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre"><p class="nombreproducto"><?php echo $filaVentilador["nombre_ventilador"] ?> </p> </div>
                                <p class="codigoproducto"><?php echo $filaVentilador["descripcion_ventilador"] ?> </p>
                                <p class="precioproducto">S/<?php echo $filaVentilador["precio_ventilador"] ?> </p>


                                <div class="contenedorcarritocompra"><!--
                                                                        <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>


                            </div>  



                        </form>
                    <?php } ?>        



                    <div class="producto15">
                        <!--                        <a href="../operaciones/producto_producto.php?accion=getList" class="custom-link">-->
                        <a href="#muestra1" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Regresar a los Productos</p>
                                <p class="productoradiadores15">Click para regresar a todos los productos que ofrecemos</p>
                            </div>
                        </a>



                    </div>   

                </div>

            </div>

            <div id="muestra3" class="clickon3">

                <div id="contenedormenusproducto" class="contenedormenusproductomuestra3">

                    <p id="tituloproducto">Visualiza y compra nuestros RADIADORES en nuestra empresa SIXCAR</p>

                    <script type="text/javascript">

                        let codref = 1;

                        for (var i = 1; i <= 7; i++) {

                            codref = (++codref % 8 == 0) ? 1 : codref;

                            let lispro = `
                        <div class="producto">
                            <img src="../productologoradiador/r${codref}.png" alt=""/>
                            `;

                            if (i === 1) {
                                lispro += `
//                                <a href="../operaciones/producto_nissan.php?accionnissan=getListnissan" class="custom-link-produ">
                                <a href="#muestra8" class="custom-link-produ">
                                    <div class="producto_produ">
                                <p class="nombreproductoradiador">NISSAN</p>
                                <p class="precioproductoradiador">Ver más</p>
                                    </div>
                                </a>`;
                            }
                            if (i === 2) {
                                lispro += `
//                                <a href="../operaciones/producto_chinos.php?accionchino=getListchino" class="custom-link-produ">
                                <a href="#muestra5" class="custom-link-produ">
                                    <div class="producto_produ">
                                <p class="nombreproductoradiador">AUTOS CHINOS</p>
                                <p class="precioproductoradiador">Ver más</p>
                                    </div>
                                </a>`;
                            }
                            if (i === 3) {
                                lispro += `
//                                <a href="../operaciones/producto_chevrolet.php?accionchevro=getListchevro" class="custom-link-produ">
                                <a href="#muestra4" class="custom-link-produ">
                                    <div class="producto_produ">
                                <p class="nombreproductoradiador">CHEVROLET</p>
                                <p class="precioproductoradiador">Ver más</p>
                                    </div>
                                </a>`;
                            }
                            if (i === 4) {
                                lispro += `
//                                <a href="../operaciones/producto_kia.php?accionkia=getListkia" class="custom-link-produ">
                                <a href="#muestra7" class="custom-link-produ">
                                    <div class="producto_produ">
                                <p class="nombreproductoradiador">KIA</p>
                                <p class="precioproductoradiador">Ver más</p>
                                    </div>
                                </a>`;
                            }
                            if (i === 5) {
                                lispro += `
//                                <a href="../operaciones/producto_toyota.php?acciontoyota=getListtoyota" class="custom-link-produ">
                                <a href="#muestra10" class="custom-link-produ">
                                    <div class="producto_produ">
                                <p class="nombreproductoradiador">TOYOTA</p>
                                <p class="precioproductoradiador">Ver más</p>
                                    </div>
                                </a>`;
                            }
                            if (i === 6) {
                                lispro += `
//                                <a href="../operaciones/producto_hyundai.php?accionhyu=getListhyu" class="custom-link-produ">
                                <a href="#muestra6" class="custom-link-produ">
                                    <div class="producto_produ">
                                <p class="nombreproductoradiador">HYUNDAI</p>
                                <p class="precioproductoradiador">Ver más</p>
                                    </div>
                                </a>`;
                            }
                            if (i === 7) {
                                lispro += `
//                                <a href="../operaciones/producto_suzuki.php?accionsuz=getListsuz" class="custom-link-produ">
                                <a href="#muestra9" class="custom-link-produ">
                                <div class="producto_produ"> 
                                <p class="nombreproductoradiador">SUZUKI</p>
                                <p class="precioproductoradiador">Ver más</p>
                                </div>     
                                </a>`;
                            }

                            lispro += `
                            </div>`;
                            document.write(lispro);
                        }

                    </script>

                    <!--                    <a href="./operaciones/producto_producto.php?accion=getList" class="custom-link producto1515">-->
                    <a href="#muestra1" class="custom-link producto1515">
                        <div class="produ15">
                            <img src="../imagenes/producto15.png" alt=""/>
                            <p class="nombreproducto15">Regresar a los Productos</p>
                            <p class="productoradiadores15">Click para regresar a todos los productos que ofrecemos</p>
                        </div>
                    </a>

                </div>

            </div>

            <div id="muestra4" class="clickon">

                <div id="contenedormenusproducto"  class="contenedordemuestra">

                    <p id="tituloproducto">CHEVROLET</p>

                    <?php foreach ($listachevro as $filachevro) { ?>
                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">
                            <div class="producto">
                                <img src="../chevo/<?php echo $filachevro["chevrolet"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre"><p class="nombreproducto"><?php echo $filachevro["nombre_chevrolet"] ?> </p> </div>
                                <p class="codigoproducto">Codigo del producto: <?php echo $filachevro["codigo_chevrolet"] ?></p>
                                <p class="precioproducto">S/<?php echo $filachevro["precio_chevrolet"] ?></p>

                                <div class="contenedorcarritocompra"><!--
                                                                            <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>

                            </div>
                        </form>
                    <?php } ?>


                    <div class="producto15">
                        <!--                        <a href="../productos_radiadores.php" class="custom-link">-->
                        <a href="#muestra3" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Regresar a los Radiadores</p>
                                <p class="productoradiadores15">Click para visualizar todos los "Radiadores" que ofrecemos</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div id="muestra5" class="clickon">

                <div id="contenedormenusproducto"  class="contenedordemuestra">

                    <p id="tituloproducto">AUTOS CHINOS</p>



                    <?php foreach ($listachino as $filachino) { ?>

                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">

                            <div class="producto">
                                <img src="../chinos/<?php echo $filachino["chino"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre"><p class="nombreproducto"><?php echo $filachino["nombre_chino"] ?></p> </div>
                                <p class="codigoproducto">Codigo del producto: <?php echo $filachino["codigo_chino"] ?></p>
                                <p class="precioproducto">S/<?php echo $filachino["precio_chino"] ?></p>


                                <div class="contenedorcarritocompra"><!--
                                                                        <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>


                            </div>    

                        </form>
                    <?php } ?>



                    <div class="producto15">
                        <!--                        <a href="../productos_radiadores.php" class="custom-link">-->
                        <a href="#muestra3" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Regresar a los Radiadores</p>
                                <p class="productoradiadores15">Click para visualizar todos los radiadores que ofrecemos</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div id="muestra6" class="clickon">

                <div id="contenedormenusproducto"  class="contenedordemuestra">

                    <p id="tituloproducto">HYUNDAI</p>



                    <?php foreach ($listahyu as $filahyu) { ?>

                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">

                            <div class="producto">
                                <img src="../hyundai/<?php echo $filahyu["hyundai"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre"><p class="nombreproducto"><?php echo $filahyu["nombre_hyundai"] ?></p> </div>
                                <p class="codigoproducto">Codigo del producto: <?php echo $filahyu["codigo_hyundai"] ?></p>
                                <p class="precioproducto">S/<?php echo $filahyu["precio_hyundai"] ?></p>


                                <div class="contenedorcarritocompra"><!--
                                                                        <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>


                            </div>    

                        </form>

                    <?php } ?>




                    <div class="producto15">    
                        <!--                        <a href="../productos_radiadores.php" class="custom-link">-->
                        <a href="#muestra3" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Regresar a los Radiadores</p>
                                <p class="productoradiadores15">Click para visualizar todos los radiadores que ofrecemos</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div id="muestra7" class="clickon">

                <div id="contenedormenusproducto"  class="contenedordemuestra">

                    <p id="tituloproducto">KIA</p>



                    <?php foreach ($listakia as $filakia) { ?>

                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">

                            <div class="producto">
                                <img src="../kia/<?php echo $filakia["kia"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre"><p class="nombreproducto"><?php echo $filakia["nombre_kia"] ?></p> </div>
                                <p class="codigoproducto">Codigo del producto: <?php echo $filakia["codigo_kia"] ?></p>
                                <p class="precioproducto">S/<?php echo $filakia["precio_kia"] ?></p>


                                <div class="contenedorcarritocompra"><!--
                                                                        <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>


                            </div>


                        </form>
                    <?php } ?>



                    <div class="producto15">
                        <!--                        <a href="../productos_radiadores.php" class="custom-link">-->
                        <a href="#muestra3" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Regresar a los Radiadores</p>
                                <p class="productoradiadores15">Click para visualizar todos los radiadores que ofrecemos</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div id="muestra8" class="clickon">

                <div id="contenedormenusproducto"  class="contenedordemuestra">

                    <p id="tituloproducto">NISSAN</p>



                    <?php foreach ($listanissan as $filanissan) { ?>

                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">

                            <div class="producto">
                                <img src="../nissan/<?php echo $filanissan["nissan"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre"><p class="nombreproducto"><?php echo $filanissan["nombre_nissan"] ?></p> </div>
                                <p class="codigoproducto">Codigo del producto: <?php echo $filanissan["codigo_nissan"] ?></p>
                                <p class="precioproducto"><?php echo $filanissan["precio_nissan"] ?></p>


                                <div class="contenedorcarritocompra"><!--
                                                                        <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>


                            </div>  

                        </form>   

                    <?php } ?>





                    <div class="producto15">
                        <!--                        <a href="../productos_radiadores.php" class="custom-link">-->
                        <a href="#muestra3" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Regresar a los Radiadores</p>
                                <p class="productoradiadores15">Click para visualizar todos los radiadores que ofrecemos</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div id="muestra9" class="clickon">

                <div id="contenedormenusproducto"  class="contenedordemuestra">

                    <p id="tituloproducto">SUZUKI</p>

                    <?php foreach ($listasuzu as $filasuzu) { ?>

                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">

                            <div class="producto">
                                <img src="../suzu/<?php echo $filasuzu["suzuki"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre"><p class="nombreproducto"><?php echo $filasuzu["nombre_suzuki"] ?> </p> </div>
                                <p class="codigoproducto">Codigo del producto: <?php echo $filasuzu["codigo_suzuki"] ?> </p>
                                <p class="precioproducto">S/<?php echo $filasuzu["precio_suzuki"] ?></p>

                                <div class="contenedorcarritocompra"><!--
                                                                        <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>



                            </div> 

                        </form>

                    <?php } ?>




                    <div class="producto15">
                        <!--                        <a href="../productos_radiadores.php" class="custom-link">-->
                        <a href="#muestra3" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Regresar a los Radiadores</p>
                                <p class="productoradiadores15">Click para visualizar todos los radiadores que ofrecemos</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div id="muestra10" class="clickon">

                <div id="contenedormenusproducto"  class="contenedordemuestra">

                    <p id="tituloproducto">TOYOTA</p>




                    <?php foreach ($listatoyota as $filatoyota) { ?>

                        <form id="formularioproducto<?php echo $index ?>" name="formularioproducto" method="post" action="../cart.php">

                            <div class="producto">
                                <img src="../toyota/<?php echo $filatoyota["toyota"] ?>" alt="" class="imagen-compr"/>
                                <div class="contenedornombre"><p class="nombreproducto"><?php echo $filatoyota["nombre_toyota"] ?> </p> </div>
                                <p class="codigoproducto">Codigo del producto: <?php echo $filatoyota["codigo_toyota"] ?> </p>
                                <p class="precioproducto">S/<?php echo $filatoyota["precio_toyota"] ?> </p>


                                <div class="contenedorcarritocompra"><!--
                                                                        <p id="textocarrito">Agregar al carrito</p>-->
                                    <span class="material-icons-outlined carritocompra">
                                        shopping_cart
                                    </span>
                                    <!-- Campos ocultos para pasar información relevante al formulario -->
        <!--                                <input type="hidden" name="producto_id" value="<?php echo $filaproducto['id_producto']; ?>">
                                    <input type="hidden" name="cantidad" value="1">-->
                                    <!-- Botón
                                    de envío -->
                                    <button type="button" id="botonagregar" class="botonagre" onclick="submitForm(<?php echo $index ?>)">Agregar al carrito</button>
                                </div>


                            </div>   

                        </form>

                    <?php } ?>






                    <div class="producto15">
                        <!--                        <a href="../productos_radiadores.php" class="custom-link">-->
                        <a href="#muestra3" class="custom-link">
                            <div class="produ15">
                                <img src="../imagenes/producto15.png" alt=""/>
                                <p class="nombreproducto15">Regresar a los Radiadores</p>
                                <p class="productoradiadores15">Click para visualizar todos los radiadores que ofrecemos</p>
                            </div>
                        </a>

                    </div>

                </div>

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
