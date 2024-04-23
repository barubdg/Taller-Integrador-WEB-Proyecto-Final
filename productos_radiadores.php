<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Sixcar</title>
        <link href="./CSS/estilo_productos.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_pie_servicios.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_cabezilla_1.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_video_1.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_menunavegacion_1.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Etiqueta de idioma -->
        <meta name="language" content="es">
        
        <style>
            
            .colorfondo{
                
                background-color: #efeded;
                
            }
            
            .nombreproducto15{
                color: #ff0000;
                text-decoration: #ff0000;
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
        
            <div id="contenedormenusproducto">
                
                <p id="tituloproducto">Visualiza y compra nuestros RADIADORES en nuestra empresa SIXCAR</p>
                
                <script type="text/javascript">
                
                let codref = 1;
                
                for (var i = 1; i <= 7; i++) {
                    
                    codref = (++codref%8 == 0)?1:codref;
                    
                    let lispro = `
                    <div class="producto">
                        <img src="./productologoradiador/r${codref}.png" alt=""/>
                        `;

                    if (i === 1) {
                        lispro += `
                            <a href="./operaciones/producto_nissan.php?accionnissan=getListnissan" class="custom-link-produ">
                                <div class="producto_produ">
                            <p class="nombreproductoradiador">NISSAN</p>
                            <p class="precioproductoradiador">Ver más</p>
                                </div>
                            </a>`;
                    }
                    if (i === 2) {
                        lispro += `
                            <a href="./operaciones/producto_chinos.php?accionchino=getListchino" class="custom-link-produ">
                                <div class="producto_produ">
                            <p class="nombreproductoradiador">AUTOS CHINOS</p>
                            <p class="precioproductoradiador">Ver más</p>
                                </div>
                            </a>`;
                    }
                    if (i === 3) {
                        lispro += `
                            <a href="./operaciones/producto_chevrolet.php?accionchevro=getListchevro" class="custom-link-produ">
                                <div class="producto_produ">
                            <p class="nombreproductoradiador">CHEVROLET</p>
                            <p class="precioproductoradiador">Ver más</p>
                                </div>
                            </a>`;
                    }
                    if (i === 4) {
                        lispro += `
                            <a href="./operaciones/producto_kia.php?accionkia=getListkia" class="custom-link-produ">
                                <div class="producto_produ">
                            <p class="nombreproductoradiador">KIA</p>
                            <p class="precioproductoradiador">Ver más</p>
                                </div>
                            </a>`;
                    }
                    if (i === 5) {
                        lispro += `
                            <a href="./operaciones/producto_toyota.php?acciontoyota=getListtoyota" class="custom-link-produ">
                                <div class="producto_produ">
                            <p class="nombreproductoradiador">TOYOTA</p>
                            <p class="precioproductoradiador">Ver más</p>
                                </div>
                            </a>`;
                    }
                    if (i === 6) {
                        lispro += `
                            <a href="./operaciones/producto_hyundai.php?accionhyu=getListhyu" class="custom-link-produ">
                                <div class="producto_produ">
                            <p class="nombreproductoradiador">HYUNDAI</p>
                            <p class="precioproductoradiador">Ver más</p>
                                </div>
                            </a>`;
                    }
                    if (i === 7) {
                        lispro += `
                            <a href="./operaciones/producto_suzuki.php?accionsuz=getListsuz" class="custom-link-produ">
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
            
            <a href="./operaciones/producto_producto.php?accion=getList" class="custom-link">
                <div class="produ15">
                    <img src="./imagenes/producto15.png" alt=""/>
                    <p class="nombreproducto15">Regresar a los Productos</p>
                    <p class="productoradiadores15">Click para regresar a todos los productos que ofrecemos</p>
                </div>
            </a>
            
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
