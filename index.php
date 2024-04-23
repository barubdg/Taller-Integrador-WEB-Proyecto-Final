<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Sixcar</title>
        
        <link href="./CSS/estilo_principal.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_pie.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_cabezilla.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_video.css" rel="stylesheet" type="text/css"/>
        <link href="./CSS/estilo_menunavegacion.css" rel="stylesheet" type="text/css"/>
        <link href="./slider_marcas_index/estilo_slider_marca_index.css" rel="stylesheet" type="text/css"/>
        <link href="./slider_fotos_principal/estilo_fotos_principal.css" rel="stylesheet" type="text/css"/>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        
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
        
        <div id="contenedormenus">
            
            
            
            <div id="contenedorpromociones">
                    
                <script type="text/javascript">
                
                    for(var i=0; i<=2; i++){
                    let contenidopromociones=`
                        
                        <div class="vistaslide n${i}">
    
                            

                        </div>`;
                    document.write(contenidopromociones);
                    }
                    
                    
                    
                </script>
<!--                <h1>slide n°${i}</h1>-->
            <div class="botonfo derecha">
                
                &gt;
                
            </div>
            
            <div class="botonfo izquierda"> 
                
                &lt;
                
            </div>
            
            <ul class="paginasion">
                
                <script type="text/javascript" >
                
                for(var i=0; i<=2; i++){
                    
                    let circuloboton=`
                        <li></li>
                    `;
                    document.write(circuloboton);
                    
                }
                
                </script>
                
            </ul>
                
            </div>
            
            
            <script>
                
                var indice=0;
                let cantslide=2;
                
                $(".paginasion li").eq(indice).css("background-color","rgba(255,255,255,0.4)");
                
                $(".paginasion li").click(function(){
                    
                    indice= $(this).index()-1;
                    $(".paginasion li").css("background-color","rgba(255,255,255,0.9)");
                    $(this).css("background-color","rgba(255,255,255,0.4)");
                    $(".vistaslide").hide();
                    $(".vistaslide").eq(indice).fadeIn();
                    
                });
                
                setInterval(function (){
                     
                    indice++;
                    if(indice>cantslide){
                        indice=0;
                    }
                    $(".vistaslide").hide();
                    $(".vistaslide").eq(indice).fadeIn();
                    $(".paginasion li").css("background-color","rgba(255,255,255,0.9)");
                    $(".paginasion li").eq(indice).css("background-color","rgba(255,255,255,0.4)");
                    
                }, 5000);
                
                $(".derecha").click(function (){
                    
                    indice++;
                    if(indice>cantslide){
                        indice=0;
                    }
                    $(".vistaslide").hide();
                    $(".vistaslide").eq(indice).fadeIn();
                    $(".paginasion li").css("background-color","rgba(255,255,255,0.9)");
                    $(".paginasion li").eq(indice).css("background-color","rgba(255,255,255,0.4)");
                    
                });
                
                $(".izquierda").click(function (){
                    
                    indice--;
                    if(indice<0){
                        indice=cantslide;
                    }
                    $(".vistaslide").hide();
                    $(".vistaslide").eq(indice).fadeIn();
                    $(".paginasion li").css("background-color","rgba(255,255,255,0.9)");
                    $(".paginasion li").eq(indice).css("background-color","rgba(255,255,255,0.4)");
                    
                });
                
            </script>
            
            
            
            
            
            
            <section id="textomarcasinicio">
                
                <h1>Sixcar trabaja con diversas marcas que se destacan en el mercado de radiadores. 
                    Estas marcas contribuyen significativamente a la satisfacción de nuestros clientes y 
                    a la variedad de vehículos que cada una de ellas ofrece.</h1>
                
            </section>
            
            <div class="slidercontenedor">
                
                <div class="slider-track">
                    
                    <script type="text/javascript">
                        
                        for(var i = 1; i <= 31; i++){
                           
                           let imgmarcas=`
                                <div class="slider">
                                   
                                   <img src="./slider_marcas_index/imagenes_marca_carros/i${i}.png" alt=""/>
                                   
                                </div>`;
                                
                            document.write(imgmarcas);
                        }
                    
                    </script>
                    
                </div>
                
            </div>
                
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
