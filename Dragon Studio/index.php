<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Dragon Studio</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/3.png" sizes="32x32" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- CSS, Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/extras.css">
    <link rel="stylesheet" href="css/secciones.css">
    <link rel="stylesheet" href="css/tablet.css">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/languajes.js"></script>

    <script src="js/button.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            anchor.init()
        });

        anchor = {
            init: function() {
                $("a.anchorLink").click(function() {
                    elementClick = $(this).attr("href")
                    destination = $(elementClick).offset().top;
                    $("html:not(:animated),body:not(:animated)").animate({
                        scrollTop: destination
                    }, 1100);
                    return false;
                })
            }
        }

    </script>
</head>

<body id="page-top">


    <!-- enlace flotante -->
    <a name="anchorTarget" id="anchorTarget">


        <div id="circularMenu1" class="circular-menu circular-menu-left">

            <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
                <i class="fa fa-bars"></i>
            </a>

            <menu class="items-wrapper">
                <a class="menu-item translate" id="es">Es</a>
                <a class="menu-item translate" id="en">En</a>
            </menu>

        </div>


        <div id="carouselExampleCaptions" class="carousel slide tamañoHead" data-ride="carousel">
            <img src="assets/img/Portada2.png" class="imgHeader" alt="Portada Dragon Studio">
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            </a>
        </div>
 

        <section class="page-section colorRed sizeMain" id="about">
            <div class="container sizeSec">
                <div class="row justify-content-center">
                    <div class="col-lg-5 space text-center">
                        <div class="containerLin">
                            <hr class="linea">
                            <h2 class="mb-3 d-flex lang" key="quienesSms">¿Quiénes somos?</h2>
                            <hr class="linea2">
                        </div>
                        <p class="mt-0 lang" key="QSdescripcion">DragonClub Studios es un equipo conformado por talentosos miembros, mayormente de origen latinoamericano, dedicados a la creación de contenido para la Marketplace Oficial de Minecraft y realización de comisiones personalizadas.
                        </p>
                        <div class="containerLin">
                            <hr class="linea">
                            <img src="assets/img/1.png" width="50px" height="50px" alt="">
                            <hr class="linea2">
                        </div>
                    </div>
                    <div class="col-lg-5 text-center">
                        <div class="containerLin">
                            <hr class="linea">
                            <h2 class="mb-3 d-flex lang" key="nuestraV">Nuestra visión</h2>
                            <hr class="linea2">
                        </div>
                        <p class="mt-0 lang" key="NVdescripcion">Lograr brindar un excelente servicio y cualidad como equipo, creando contenido de alta calidad para la Marketplace Oficial de Minecraft.
                        </p>
                        <div class="containerLin">
                            <hr class="linea">
                            <img src="assets/img/1.png" width="50px" height="50px" alt="">
                            <hr class="linea2">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Links -->
        <div class="separadorLogo">
            <img src="assets/img/separadorLogo.png" class="imgSepar" alt="">
        </div>


        <!-- Links R-L -->
        <div class="contenedorNos">
            <div class="cardNos">
                <div class="text-white textNosCab lang" key="nosotros">Nosotros</div>
                <img src="assets/img/nosotros/IMG-20201120-WA0023.jpg" class="cardEncabezado asd" alt="">
                <div class="info-nosotros textNos text-white">
                    <p class="lang" key="dueño">Dueño - DragonClub Studios</p>
                </div>
                <div class="info-nosotros textNos text-white mt-3">
                    <p>Jahir Q.</p>
                </div>
                <div class="cardFotos">
                    <img src="assets/img/nosotros/2.jpg" class="cardEncabezado mt-5" alt="Nosotros Uno">
                </div>
                <div class="info-nosotros textNos text-white">
                    <p>CEO - DragonClub Stuidos</p>
                </div>
                <div class="info-nosotros textNos text-white">
                    <p>Kevin M.</p>
                </div>
                <div class="cardFotos">
                    <img src="assets/img/nosotros/3.jpg" class="cardEncabezado mt-5" alt="Nosotros Uno">
                </div>
                <div class="info-nosotros textNos text-white">
                    <p>Manager - DragonClub Studio</p>
                </div>
                <div class="info-nosotros textNos text-white">
                    <p>Nathan E.</p>
                </div>
            </div>
        </div>

        <div>
            <!-- Formulario de Postularte -->
            <button type="button" class="btn btn-danger btnContact lang" key="postularte" id="btnPostularte" onclick="ShowHideElement()">Postularte</button>
            <iframe class="contPost" src="https://docs.google.com/forms/d/e/1FAIpQLSfDl4Cx85ggkpi6cDU1sp5aV-gXf6bG6hxARu9gtDKb94h2Fg/viewform?embedded=true" width="70%" height="900" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
            <script type="text/javascript">
                $(".contPost").hide();

                function ShowHideElement() {
                    let textt = "";
                    if ($("#btnPostularte").text() === "Postularte" || $("#btnPostularte").text() === "Join us") {
                        $(".contPost").show();
                        textt = "Cerrar";
                    } else {
                        $(".contPost").hide();
                        textt = "Postularte";
                    }
                    $("#btnPostularte").html(textt);
                }

            </script>
            <!-- Formulario de Contacto -->
            <button type="button" class="btn btn-danger btnContact2" id="btnContacto" onclick="ShowHideElementCont()"><a href="#ContactoLink" class="anchorLink lang" key="contactoBtn">Contacto</a></button>
            <!-- Desaparecer seccion
        <script type="text/javascript">
            $(".contShow").hide();
            function ShowHideElementCont(){
                let textta = "";
                if($("#btnContacto").text() === "Contacto"){
                    $(".contShow").show();
                    textta = "Contacto...";
                }else{
                    $(".contShow").hide();
                    textta = "Contacto";
                }
                $("#btnContacto").html(textta);
            }
        </script>
        -->
        </div>




        <div class="contenedor">
            <ul>
                <li class="enlaces ml-md-2 mr-md-2 ml-sm-2 mr-sm-2" data-nombre="contenidos">Marketplace</li>
                <li class="enlaces ml-md-5 ml-sm-1" data-nombre="ilustraciones">Galeria</li>
            </ul>
            <div class="fotos">
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/1.jpg" alt=""></div>
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/2.jpg" alt=""></div>
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/3.jpg" alt=""></div>
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/4.jpg" alt=""></div>
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/5.jpg" alt=""></div>
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/6.jpg" alt=""></div>
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/7.jpg" alt=""></div>
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/8.jpg" alt=""></div>
                <div class="caja filtro ilustraciones"><img src="assets/img/portfolio/9.jpg" alt=""></div>




                <div class="row d-flex justify-content-center" style="margin: 0;">
                    <div class="card mb-5 mr-0 mr-sm-5 col-xl-5 col-sm-5 col-10 filtro contenidos transCard">
                        <img src="assets/img/Awesome_Animal_Thumbnail.jpg" class="card-img-top mt-4" alt="...">
                        <div class="card-body">
                            <h5 class="card-title lang" key="cardTitulo1"><strong> ¿Te gustaría disfrazarte de tus animales favoritos?</strong></h5>
                            <p class="card-text lang" key="cardSubtitulo1">¡En este pack puedes expresar todo el amor que sientes por ellos! Tiene muchísimos estilos adorables que llenarán tu corazón de alegría.</p>
                            <p class="card-text lang" key="cardItem1-1"><small class="text-muted">- Doce aspectos adorables con los que disfrutar</small></p>
                            <p class="card-text lang" key="cardItem1-2"><small class="text-muted">- Dos bonitos aspectos totalmente gratis</small></p>
                            <a href="https://www.minecraft.net/es-es/pdp?id=ef3e315a-6421-4f69-bc15-eca7447ae45d" class="badge badge-primary m-auto lang" key="cardPack1">Ver pack</a>
                        </div>
                    </div>
                    <div class="card mb-5 mr-0 ml-sm-5 col-xl-5 col-sm-5 col-10 filtro contenidos transCard">
                        <img src="assets/img/marcket/contenido3/Heaven_Warrior_Thumbnail.jpg" class="card-img-top mt-4" alt="...">
                        <div class="card-body">
                            <h5 class="card-title lang" key="cardTitulo2"><strong>¡Grandes batallas están teniendo lugar en los cielos!</strong></h5>
                            <p class="card-text lang" key="cardSubtitulo2">Obtén a los mejores guerreros en este paquete con estilos geniales y coloridos. ¡Lleva este paquete contigo para increíbles batallas aéreas! ¡Elige tu guerrero favorito!</p>
                            <p class="card-text lang" key="cardItem2-1"><small class="text-muted">- Dos máscaras totalmente gratis</small></p>
                            <p class="card-text lang" key="cardItem2-2"><small class="text-muted">- Doce pieles de grandes guerreros</small></p>
                            <a href="https://www.minecraft.net/es-es/pdp?id=e6169477-f374-4726-b5f3-5e25e0454b1c" class="badge badge-primary m-auto lang" key="cardPack2">Ver pack</a>
                        </div>
                    </div>
                    <div class="card mb-3 mr-0 mr-sm-5 col-xl-5 col-sm-5 col-10 filtro contenidos transCard">
                        <img src="assets/img/imagen.jpg" class="card-img-top mt-4" alt="...">
                        <div class="card-body">
                            <h5 class="card-title lang" key="cardTitulo3"><strong>¡Las pociones son fascinantes!</strong></h5>
                            <p class="card-text lang" key="cardSubtitulo3">Pueden darte poderes increíbles como protección contra el fuego, respiración bajo el agua y muchos más, pero ¿qué más pueden darte las pociones? ¡Una apariencia increíble! Disfruta de este paquete mágico de 12 diseños de pociones que te harán destacar entre tus amigos.</p>
                            <p class="card-text lang" key="cardItem3-1"><small class="text-muted">- Doce pieles de pociones</small></p>
                            <p class="card-text lang" key="cardItem3-2"><small class="text-muted">- Dos skins totalmente gratis</small></p>
                            <p class="card-text lang" key="cardItem3-3"><small class="text-muted">- Creado por DragonClub Studios</small></p>
                            <a href="#" class="badge badge-primary m-auto lang" key="cardPack3">Ver pack</a>
                        </div>
                    </div>

                    <div class="card mb-3 mr-0 ml-sm-5 col-xl-5 col-sm-5 col-10 filtro contenidos transCard">
                        <img src="assets/img/AnimalAristocrats_Thumbnail.jpg" class="card-img-top mt-4" alt="...">
                        <div class="card-body">
                            <h5 class="card-title lang" key="cardTitulo4"><strong>¡Diviértete celebrando tu propia fiesta aristocrática!</strong></h5>
                            <p class="card-text lang" key="cardSubtitulo4">Elige tu aspecto favorito entre estos 10 animales tan elegantes. ¡Son perfectos para jugar a rol con tus amigos! Puedes meterte en el papel de un trabajador, de un cliente rebosante de estilo o de un empresario pudiente. Deja volar tu imaginación, pues lo que pasa en Minecraft, se queda en Minecraft.</p>
                            <a href="https://www.minecraft.net/es-es/pdp?id=8226988a-0571-4e91-9733-145015bd6959" class="badge badge-primary m-auto lang" key="cardPack4">Ver pack</a>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <hr class="linConEnd">

        <a name="anchorTarget" id="ContactoLink">
            <section class="page-section contShow" id="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-12 mt-4 text-center">

                            <form action="correo.php" method="post">
                                <h2 class="text-white mb-xl-3 mb-0 lang" key="formContacto">Contacto</h2>
                                <p class="lang text-white-50 mt-3" key="formAsunto">Asunto</p>
                                <input class="inp" type="text" name="asunto" required>
                                <p class="lang text-white-50 mt-3" key="formDesc">Descripcion</p>
                                <input class="inp" type="text" name="descripcion" required>
                                <button class="btn btn-outline-light btn-lg send lang text-center" key="formEnviar"><input class=" lang"  type="submit" value="">Enviar</button>
                            </form>

                        </div>
                        <div class="col-md-4 col-12 mt-4 text-center logoCon">
                            <img class="imgCont" src="assets/img/dragon3.png" width="300px" alt="">
                        </div>
                    </div>
                </div>
                <hr class="linConEnd">
            </section>




            <!-- Footer -->
            <footer>
                <img src="assets/img/footerActa.png" class="imgFooterDesk" alt="">
                <img src="assets/img/footerMobile.png" class="imgFooterMob" alt="">
                <div class="contain">
                    <div class="text-center enlFooter">
                        <a href="#" class="mr-md-5 mr-2 text-white lang" key="footerTienda">Tienda</a>
                        <spam href="#" class="mr-md-5 mr-2 text-white-50">|</spam>
                        <a href="#" class="mr-md-5 mr-2 text-white lang" key="footerMundos">Mundos</a>
                        <spam href="#" class="mr-md-5 mr-2 text-white-50">|</spam>
                        <a href="#" class="mr-md-5 mr-2 text-white lang" key="footerContenidos">Contenidos</a>
                    </div>
                    <h5 class="text-white mt-3 h2Footer lang" key="footer1p">¿No tienes un servidor de construcción profesional público donde construir?</h5>
                    <h5 class="text-white mt-0 h2Footer lang" key="footer2p">Entra a play.dragonclub.es - Versión: 1.12.2</h5>
                    <h5 class="text-white mt-0 h2Footer lang" key="footer3p">¡Disfruta de tu estadía!</h5>

                    <p class="text-right pFoo">Copyright 2020 - Dragon Studio</p>
                </div>
            </footer>


            <a href="#anchorTarget" class="anchorLink"><button class="back-to-top" type="button"><img src="assets/img/icons8-up-48.png" alt=""></button></a>


            <!-- Bootstrap core JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
            <!-- Third party plugin JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</body>

</html>
