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
    <script src="js/jquery.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <script src="js/button.js"></script>
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
                    <p>CEO - DragonClub Studios</p>
                </div>
                <div class="info-nosotros textNos text-white">
                    <p>Kevin M.</p>
                </div>
                <div class="cardFotos">
                    <img src="assets/img/nosotros/3.jpg" class="cardEncabezado mt-5" alt="Nosotros Uno">
                </div>
                <div class="info-nosotros textNos text-white">
                    <p>Manager - DragonClub Studios</p>
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
        </div>

        <div class="contenedor">
            <ul>
                <li class="enlaces ml-md-2 mr-md-2 ml-sm-2 mr-sm-2" id="enTienda" data-nombre="contenidos">Marketplace</li>
                <li class="enlaces ml-md-5 ml-sm-1 lang" id="enGaleria" data-nombre="ilustraciones" key="enlGaleria">Galeria</li>
                <li class="enlaces ml-md-5 ml-sm-1 lang" id="enVideos" data-nombre="videos" key="enlVideos">Videos</li>
            </ul>

            <!-- Galeria ampliacion -->
            <div class="fotos">
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/1.jpg" class="image-popup">
                            <img src="assets/img/portfolio/1.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/2.jpg" class="image-popup">
                            <img src="assets/img/portfolio/2.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/3.jpg" class="image-popup">
                            <img src="assets/img/portfolio/3.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/4.jpg" class="image-popup">
                            <img src="assets/img/portfolio/4.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/5.jpg" class="image-popup">
                            <img src="assets/img/portfolio/5.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/6.jpg" class="image-popup">
                            <img src="assets/img/portfolio/6.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/7.jpg" class="image-popup">
                            <img src="assets/img/portfolio/7.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/8.jpg" class="image-popup">
                            <img src="assets/img/portfolio/8.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/9.jpg" class="image-popup">
                            <img src="assets/img/portfolio/9.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/10.jpg" class="image-popup">
                            <img src="assets/img/portfolio/10.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" data-wow-delay="0.6s">
                    <div class="work-thumb">
                        <a href="assets/img/portfolio/11.jpg" class="image-popup">
                            <img src="assets/img/portfolio/11.jpg" class="img-responsive" alt="Logo Design">
                        </a>
                    </div>
                </div>





                <ul class="mb-5">
                <button class=" ml-md-2 mr-md-2 ml-sm-2 mr-sm-2 lang vmMobile filtro ilustraciones" style="position: relative; top: -150px; margin-bottom: 10px; border: none; color: #fff; background-color: tomato; border-radius: 10px;" id="btnVMas" onclick="ShowHideElementVMas()" key="verMas">Ver mas</button>
                </ul>
                <script type="text/javascript">
                    $(".contVMas").hide();

                    function ShowHideElementVMas() {
                        let textt = "";
                        if ($("#btnVMas").text() === "Ver mas" || $("#btnVMas").text() === "See more") {
                            $(".contVMas").show();
                            textt = "Cerrar";
                        } else {
                            $(".contVMas").hide();
                            textt = "Ver mas";
                        }
                        $("#btnVMas").html(textt);
                    }

                </script>

                <div class="contVMas">
                    <div class="wow fadeInUp col-md-3 col-sm-6 col-12 caja  filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/12.jpg" class="image-popup">
                                <img src="assets/img/portfolio/12.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 col-12 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/13.jpg" class="image-popup">
                                <img src="assets/img/portfolio/13.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 col-12 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/14.jpg" class="image-popup">
                                <img src="assets/img/portfolio/14.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/15.jpg" class="image-popup">
                                <img src="assets/img/portfolio/15.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/16.jpg" class="image-popup">
                                <img src="assets/img/portfolio/16.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/17.jpg" class="image-popup">
                                <img src="assets/img/portfolio/17.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/18.jpg" class="image-popup">
                                <img src="assets/img/portfolio/18.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/19.jpg" class="image-popup">
                                <img src="assets/img/portfolio/19.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/20.jpg" class="image-popup">
                                <img src="assets/img/portfolio/20.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>



                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/21.jpg" class="image-popup">
                                <img src="assets/img/portfolio/21.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/22.jpg" class="image-popup">
                                <img src="assets/img/portfolio/22.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6 caja filtro ilustraciones" style="width: 100%;" data-wow-delay="0.6s">
                        <div class="work-thumb">
                            <a href="assets/img/portfolio/23.jpg" class="image-popup">
                                <img src="assets/img/portfolio/23.jpg" class="img-responsive" alt="Logo Design">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contentvideo">
                    <iframe width="460" height="250" class="filtro videos" src="https://www.youtube.com/embed/cOSo7sFbH9M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <iframe width="460" height="250" class="filtro videos" src="https://www.youtube.com/embed/AnZ6GUGrQ3E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

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
                            <a href="https://www.minecraft.net/es-es/pdp?id=a9b24f7a-05d1-472a-aaf0-33a78bbf894b" class="badge badge-primary m-auto lang" key="cardPack3">Ver pack</a>
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
                                <p class="lang text-white-50" key="formDesc">Descripcion</p>
                                <input class="inp" type="text" name="descripcion" required>
                                <p class="text-white-50 lang" key="formEmail">Agregar email para contacto</p>
                                <input class="inp" type="email" name="email" required>
                                <p class="btn btn-outline-light btn-lg send lang text-center" key="formEnviar"><input class="lang" type="submit" value="" style="opacity: 0;">Enviar</p>
                            </form>

                        </div>
                        <div class="col-md-4 col-12 mt-4 text-center logoCon">
                            <img class="imgCont" src="assets/img/dragon3.png" width="300px" alt="">
                        </div>
                    </div>
                </div>
                <hr class="linConEnd">
            </section>


            <!-- Social -->
            <div class="background-primary text-center" style="height: 150px; z-index: 900;">
                <a href="https://www.instagram.com/dragonclub_studios/"><i class="icon-facebook_circle text-size-25 text-dark"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="45" height="45" viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g id="original-icon" fill="#e74c3c">
                                    <path d="M57.65527,19.35c-19.93789,0 -36.15527,16.21738 -36.15527,36.15527v56.68945c0,19.93789 16.21738,36.15527 36.15527,36.15527h56.68945c19.93789,0 36.15527,-16.21738 36.15527,-36.15527v-56.68945c0,-19.93789 -16.21738,-36.15527 -36.15527,-36.15527zM57.65527,23.65h56.68945c17.61152,0 31.85527,14.24375 31.85527,31.85527v56.68945c0,17.61152 -14.24375,31.85527 -31.85527,31.85527h-56.68945c-17.61152,0 -31.85527,-14.24375 -31.85527,-31.85527v-56.68945c0,-17.61152 14.24375,-31.85527 31.85527,-31.85527zM124.7,41.925c-2.96465,0 -5.375,2.41035 -5.375,5.375c0,2.96465 2.41035,5.375 5.375,5.375c2.96465,0 5.375,-2.41035 5.375,-5.375c0,-2.96465 -2.41035,-5.375 -5.375,-5.375zM86,47.3c-20.16465,0 -36.55,16.38535 -36.55,36.55c0,20.16465 16.38535,36.55 36.55,36.55c20.16465,0 36.55,-16.38535 36.55,-36.55c0,-20.16465 -16.38535,-36.55 -36.55,-36.55zM86,51.6c17.83828,0 32.25,14.41172 32.25,32.25c0,17.83828 -14.41172,32.25 -32.25,32.25c-17.83828,0 -32.25,-14.41172 -32.25,-32.25c0,-17.83828 14.41172,-32.25 32.25,-32.25zM86,58.05c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM76.96328,59.84727c-0.28555,0 -0.57109,0.05039 -0.83984,0.15957c-1.0918,0.46191 -1.6125,1.71328 -1.15898,2.81348c0.45351,1.1002 1.71328,1.6209 2.80508,1.16738c1.1002,-0.46191 1.6209,-1.71328 1.16738,-2.81348c-0.32754,-0.79785 -1.10859,-1.31855 -1.97363,-1.32695zM95.09551,59.84727c-0.89024,-0.0168 -1.69649,0.50391 -2.03242,1.32695c-0.45351,1.1002 0.06719,2.35156 1.16738,2.81348c1.0918,0.45351 2.35156,-0.06719 2.80508,-1.16738c0.45351,-1.1002 -0.06719,-2.35156 -1.15899,-2.81348c-0.25195,-0.10078 -0.5123,-0.15117 -0.78105,-0.15957zM69.30391,64.97871c-0.57949,-0.0084 -1.13379,0.21836 -1.54531,0.62988c-0.83984,0.83984 -0.83984,2.20039 0,3.04024c0.83984,0.83984 2.20039,0.83984 3.04024,0c0.83984,-0.83984 0.83984,-2.20039 0,-3.04024c-0.39473,-0.39473 -0.93223,-0.62148 -1.49492,-0.62988zM102.75488,64.97871c-0.58789,-0.0084 -1.14219,0.21836 -1.55371,0.62988c-0.83984,0.83984 -0.83984,2.20039 0,3.04024c0.83984,0.83984 2.20039,0.83984 3.04023,0c0.83984,-0.83984 0.83984,-2.20039 0,-3.04024c-0.39473,-0.39473 -0.93223,-0.62148 -1.48652,-0.62988zM107.86953,72.64649c-0.29395,0 -0.57949,0.05039 -0.83984,0.15957c-1.1002,0.46191 -1.6209,1.71328 -1.16738,2.81348c0.45352,1.1002 1.71328,1.6209 2.81348,1.16738c1.0918,-0.46191 1.6125,-1.71328 1.15899,-2.81348c-0.32754,-0.79785 -1.10859,-1.31855 -1.96524,-1.32695zM64.19766,72.65488c-0.89023,-0.0252 -1.69648,0.50391 -2.03242,1.31855c-0.45352,1.1002 0.06719,2.35996 1.15898,2.81348c0.5291,0.21836 1.12539,0.21836 1.65449,0c0.5207,-0.21836 0.94062,-0.63828 1.15899,-1.16738c0.21836,-0.5291 0.21836,-1.11699 0,-1.64609c-0.21836,-0.5291 -0.63828,-0.94902 -1.16738,-1.16738c-0.24355,-0.09238 -0.50391,-0.15117 -0.77266,-0.15117zM62.35,81.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM109.65,81.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM64.16406,90.74512c-0.28555,0 -0.57109,0.05879 -0.83984,0.16797c-1.0918,0.45352 -1.6125,1.71328 -1.15898,2.81348c0.45351,1.0918 1.71328,1.6125 2.80508,1.15899c1.1002,-0.45352 1.6209,-1.71328 1.16738,-2.80508c-0.32754,-0.79785 -1.10859,-1.32695 -1.97363,-1.33535zM107.90312,90.74512c-0.89023,-0.0168 -1.69648,0.51231 -2.04082,1.32695c-0.45351,1.1002 0.06719,2.35156 1.16738,2.80508c1.1002,0.46191 2.35156,-0.05879 2.81348,-1.15898c0.45351,-1.1002 -0.06719,-2.35156 -1.16738,-2.81348c-0.24355,-0.10078 -0.5123,-0.15117 -0.77266,-0.15957zM69.30391,98.42129c-0.57949,-0.0084 -1.14219,0.21836 -1.54531,0.62988c-0.83984,0.83984 -0.83984,2.20039 0,3.04023c0.83145,0.83984 2.20039,0.83984 3.03184,0c0.83984,-0.83984 0.83984,-2.20039 0,-3.04023c-0.39472,-0.39473 -0.92383,-0.62149 -1.48652,-0.62988zM102.75488,98.42969c-0.58789,-0.0168 -1.14219,0.20996 -1.55371,0.62149c-0.40313,0.40313 -0.62988,0.94902 -0.62988,1.52012c0,0.57109 0.22676,1.11699 0.62988,1.52012c0.83984,0.83984 2.20039,0.83984 3.04023,0c0.40313,-0.40312 0.62988,-0.94902 0.62988,-1.52012c0,-0.57109 -0.22676,-1.11699 -0.62988,-1.52012c-0.39473,-0.39473 -0.93223,-0.62149 -1.48652,-0.62149zM76.99688,103.54434c-0.89023,-0.0168 -1.69648,0.51231 -2.03242,1.33535c-0.45352,1.0918 0.06719,2.35156 1.15898,2.80508c1.1002,0.45351 2.35996,-0.06719 2.81348,-1.15899c0.45351,-1.1002 -0.06719,-2.35996 -1.16738,-2.81348c-0.24355,-0.10078 -0.50391,-0.15957 -0.77266,-0.16797zM95.07031,103.54434c-0.28555,0 -0.57109,0.05879 -0.83984,0.16797c-1.1002,0.45352 -1.6209,1.71328 -1.16738,2.81348c0.46191,1.0918 1.71328,1.6125 2.81348,1.15899c1.1002,-0.45352 1.6209,-1.71328 1.16738,-2.80508c-0.33594,-0.79785 -1.10859,-1.32695 -1.97363,-1.33535zM86,105.35c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15z"></path>
                                </g>
                            </g>
                        </svg></i></a>

                <a href="https://discord.gg/FVrQXFa"><i class="icon-twitter_circle text-size-25 text-dark ml-3"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#e74c3c">
                                    <path d="M66.83813,32.68336c0,0 -17.19514,-0.34712 -35.01477,13.24938c-0.19252,0.14756 -0.35165,0.33417 -0.46695,0.54758c0,0 -17.59977,32.38258 -17.59977,72.44492c0.00079,0.32348 0.09277,0.64018 0.26539,0.91375c0,0 11.80622,18.59688 39.24086,19.48102c0.62467,0.02017 1.21113,-0.30007 1.53187,-0.83648l5.16,-8.6c0.26806,-0.44773 0.31838,-0.99294 0.13679,-1.48217c-0.18158,-0.48923 -0.57544,-0.86958 -1.0707,-1.034c-7.90077,-2.63359 -12.79803,-6.98192 -15.78906,-10.55516c7.84866,4.17163 22.61632,10.46781 42.7682,10.46781c20.14985,0 34.91594,-6.29613 42.76484,-10.46781c-2.9912,3.57296 -7.88946,7.92196 -15.78906,10.55516c-0.49467,0.16516 -0.8877,0.54582 -1.0686,1.03496c-0.1809,0.48914 -0.13012,1.03393 0.13805,1.48121l5.16,8.6c0.32016,0.53534 0.90503,0.85542 1.52852,0.83648c27.43464,-0.88413 39.24422,-19.48102 39.24422,-19.48102c0.17144,-0.27392 0.26225,-0.5906 0.26203,-0.91375c0,-40.06403 -17.59641,-72.44492 -17.59641,-72.44492c-0.11628,-0.21373 -0.27658,-0.40037 -0.47031,-0.54758c-17.81963,-13.5965 -35.01141,-13.24937 -35.01141,-13.24937c-0.39865,0.00781 -0.78221,0.15387 -1.08508,0.4132l-1.99883,1.72c-0.47386,0.40796 -0.68904,1.04092 -0.56198,1.65315c0.12705,0.61223 0.57632,1.10731 1.17339,1.29302c7.63646,2.37636 13.09123,5.30539 17.52922,8.09609c-9.90638,-3.78665 -21.0902,-6.29883 -34.21859,-6.29883c-13.1284,0 -24.31222,2.51218 -34.21859,6.29883c4.43799,-2.79071 9.89276,-5.71974 17.52922,-8.09609c0.59706,-0.18571 1.04633,-0.68078 1.17339,-1.29302c0.12705,-0.61223 -0.08812,-1.2452 -0.56198,-1.65315l-2.00219,-1.72c-0.30199,-0.2586 -0.68423,-0.40462 -1.08172,-0.4132zM63.82477,36.29469c-7.91965,2.98782 -14.29065,6.42872 -18.3657,9.43649c-4.88188,3.60328 -7.23945,6.51047 -7.23945,6.51047c-0.51417,0.64139 -0.50267,1.55694 0.02744,2.18522c0.53011,0.62828 1.43067,0.79368 2.14944,0.39478c12.35665,-6.89001 26.98884,-11.82164 45.60352,-11.82164c18.61467,0 33.24686,4.93163 45.60352,11.82164c0.71877,0.3989 1.61933,0.2335 2.14944,-0.39478c0.53011,-0.62828 0.54161,-1.54383 0.02744,-2.18522c0,0 -2.35757,-2.90719 -7.23945,-6.51047c-4.07453,-3.00738 -10.44422,-6.4489 -18.36234,-9.43649c5.29461,0.51822 17.11183,2.74818 29.60617,12.17102c0.50963,0.95077 16.83138,31.72029 16.98836,69.92539c-0.71297,1.10729 -10.90349,16.18114 -35.18609,17.38141l-3.57102,-5.95617c14.54627,-5.72518 19.72625,-17.33773 19.72625,-17.33773c0.3059,-0.71189 0.09809,-1.54043 -0.50756,-2.0237c-0.60565,-0.48327 -1.45965,-0.50197 -2.08588,-0.04568c0,0 -18.44843,13.43078 -47.14883,13.43078c-28.70039,0 -47.14883,-13.43078 -47.14883,-13.43078c-0.62623,-0.45629 -1.48023,-0.43759 -2.08588,0.04568c-0.60565,0.48327 -0.81346,1.31181 -0.50756,2.0237c0,0 5.17888,11.61214 19.72289,17.33773l-3.57102,5.95617c-24.28035,-1.20144 -34.47316,-16.27417 -35.18609,-17.38141c0.157,-38.2082 16.48602,-68.98534 16.99172,-69.92875c12.49668,-9.42323 24.3178,-11.65035 29.60953,-12.16766zM86,48.16c-15.29736,0 -29.24615,3.57985 -42.5532,10.89109c-0.27518,0.14459 -0.45093,0.42641 -0.45969,0.73714c-0.00876,0.31073 0.15082,0.60201 0.41742,0.76187c0.26659,0.15987 0.59871,0.16344 0.86868,0.00935c13.07086,-7.18147 26.69712,-10.67945 41.7268,-10.67945c8.64241,0 16.81382,1.20088 24.69477,3.55086c0.29466,0.08766 0.6137,0.01144 0.83693,-0.19993c0.22323,-0.21137 0.31672,-0.52579 0.24525,-0.82479c-0.07147,-0.299 -0.29703,-0.53715 -0.59171,-0.62474c-8.03937,-2.39722 -16.38341,-3.62141 -25.18523,-3.62141zM114.32289,52.84297c-0.41405,0.02063 -0.75447,0.33369 -0.80964,0.74457c-0.05517,0.41088 0.19062,0.80265 0.58457,0.93176c2.87728,0.99605 5.71659,2.12192 8.51601,3.44c0.2796,0.14346 0.61519,0.12301 0.8753,-0.05335c0.26011,-0.17635 0.40333,-0.48053 0.37356,-0.79338c-0.02977,-0.31284 -0.2278,-0.58454 -0.51651,-0.70867c-2.86282,-1.34793 -5.75799,-2.49764 -8.68399,-3.51055c-0.10857,-0.03941 -0.22396,-0.05655 -0.3393,-0.05039zM126.40656,58.06008c-0.39915,-0.00072 -0.74634,0.27327 -0.83843,0.66165c-0.09209,0.38838 0.09512,0.78908 0.4521,0.96765c0.59741,0.31216 1.17191,0.5761 1.70656,0.87008c0.26997,0.15409 0.60208,0.15052 0.86868,-0.00935c0.26659,-0.15987 0.42618,-0.45114 0.41742,-0.76187c-0.00876,-0.31073 -0.18451,-0.59255 -0.45969,-0.73714c-0.60399,-0.3321 -1.18533,-0.60048 -1.73344,-0.88687c-0.12682,-0.06882 -0.26891,-0.10464 -0.4132,-0.10414zM64.5,79.12c-8.11601,0 -14.62,7.0091 -14.62,15.48c0,8.4709 6.50399,15.48 14.62,15.48c8.11601,0 14.62,-7.0091 14.62,-15.48c0,-8.4709 -6.50399,-15.48 -14.62,-15.48zM107.5,79.12c-8.11601,0 -14.62,7.0091 -14.62,15.48c0,8.4709 6.50399,15.48 14.62,15.48c8.11601,0 14.62,-7.0091 14.62,-15.48c0,-8.4709 -6.50399,-15.48 -14.62,-15.48zM64.5,82.56c6.13295,0 11.18,5.31202 11.18,12.04c0,6.72798 -5.04705,12.04 -11.18,12.04c-6.13295,0 -11.18,-5.31202 -11.18,-12.04c0,-6.72798 5.04705,-12.04 11.18,-12.04zM107.5,82.56c6.13295,0 11.18,5.31202 11.18,12.04c0,6.72798 -5.04705,12.04 -11.18,12.04c-6.13295,0 -11.18,-5.31202 -11.18,-12.04c0,-6.72798 5.04705,-12.04 11.18,-12.04z"></path>
                                </g>
                            </g>
                        </svg></i></a>

                <a href="https://twitter.com/DragonClubST"><i class="icon-google_plus_circle text-size-25 text-dark ml-3"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#e74c3c">
                                    <path d="M117.7125,18.8125c-20.57281,0 -37.3025,16.72969 -37.3025,37.3025c0,1.23625 0.30906,2.44563 0.43,3.655c-25.43719,-2.43219 -47.93156,-14.68719 -63.21,-33.4325c-0.71219,-0.90031 -1.81406,-1.38406 -2.96969,-1.30344c-1.14219,0.08062 -2.16344,0.73906 -2.72781,1.73344c-3.21156,5.52281 -5.0525,11.87875 -5.0525,18.705c0,8.26406 2.95625,15.82938 7.525,22.0375c-0.88687,-0.38969 -1.85437,-0.60469 -2.6875,-1.075c-1.06156,-0.56437 -2.33812,-0.5375 -3.37281,0.08063c-1.03469,0.61812 -1.66625,1.73344 -1.67969,2.92937v0.43c0,12.67156 6.5575,23.67688 16.2325,30.4225c-0.1075,-0.01344 -0.215,0.02688 -0.3225,0c-1.1825,-0.20156 -2.37844,0.215 -3.17125,1.11531c-0.79281,0.90031 -1.04812,2.15 -0.69875,3.29219c3.84313,11.94594 13.6525,21.07 25.8,24.4025c-9.675,5.75125 -20.89531,9.1375 -33.0025,9.1375c-2.62031,0 -5.13312,-0.13437 -7.6325,-0.43c-1.6125,-0.215 -3.15781,0.72563 -3.69531,2.2575c-0.55094,1.53188 0.05375,3.23844 1.43781,4.085c15.52031,9.95719 33.94313,15.8025 53.75,15.8025c32.10219,0 57.28406,-13.41062 74.175,-32.5725c16.89094,-19.16187 25.6925,-44.04812 25.6925,-67.295c0,-0.98094 -0.08062,-1.935 -0.1075,-2.9025c6.30219,-4.82406 11.9325,-10.48125 16.34,-17.0925c0.87344,-1.27656 0.77938,-2.98312 -0.22844,-4.16562c-0.99438,-1.1825 -2.67406,-1.54531 -4.07156,-0.88688c-1.77375,0.79281 -3.84312,0.87344 -5.6975,1.505c2.44563,-3.26531 4.54188,-6.78594 5.805,-10.75c0.43,-1.35719 -0.04031,-2.84875 -1.15562,-3.73562c-1.11531,-0.87344 -2.67406,-0.98094 -3.89688,-0.24188c-5.87219,3.48031 -12.37594,5.92594 -19.2425,7.4175c-6.665,-6.235 -15.43969,-10.4275 -25.2625,-10.4275zM117.7125,25.6925c8.77469,0 16.70281,3.74906 22.2525,9.675c0.83313,0.86 2.05594,1.22281 3.225,0.9675c4.48813,-0.88687 8.74781,-2.19031 12.9,-3.87c-2.39187,3.225 -5.34812,5.97969 -8.815,8.0625c-1.57219,0.76594 -2.31125,2.58 -1.73344,4.23281c0.56437,1.63937 2.28437,2.59344 3.99094,2.21719c3.44,-0.41656 6.50375,-1.81406 9.7825,-2.6875c-2.94281,3.18469 -6.16781,6.06031 -9.675,8.6c-0.95406,0.69875 -1.47812,1.8275 -1.3975,3.01c0.05375,1.3975 0.1075,2.78156 0.1075,4.1925c0,21.5 -8.25062,44.84094 -23.9725,62.6725c-15.72187,17.83156 -38.8075,30.315 -69.015,30.315c-13.71969,0 -26.67344,-3.03687 -38.3775,-8.385c14.5125,-1.11531 27.89625,-6.24844 38.7,-14.7275c1.12875,-0.90031 1.57219,-2.40531 1.11531,-3.77594c-0.45688,-1.37063 -1.72,-2.31125 -3.15781,-2.35156c-11.34125,-0.20156 -20.84156,-6.79937 -25.9075,-16.125c0.18813,0 0.34938,0 0.5375,0c3.39969,0 6.75906,-0.43 9.89,-1.29c1.505,-0.44344 2.53969,-1.84094 2.48594,-3.41312c-0.05375,-1.57219 -1.16906,-2.91594 -2.70094,-3.25188c-12.24156,-2.4725 -21.41937,-12.44312 -23.5425,-24.8325c3.46688,1.19594 7.01438,2.13656 10.8575,2.2575c1.57219,0.09406 2.99656,-0.88687 3.48031,-2.37844c0.48375,-1.49156 -0.1075,-3.13094 -1.43781,-3.96406c-8.17,-5.46906 -13.545,-14.78125 -13.545,-25.37c0,-3.92375 1.02125,-7.525 2.365,-10.965c17.2,18.87969 41.28,31.41688 68.4775,32.7875c1.075,0.05375 2.12313,-0.38969 2.82188,-1.20937c0.69875,-0.83313 0.9675,-1.935 0.72562,-2.98313c-0.52406,-2.23062 -0.86,-4.59562 -0.86,-6.9875c0,-16.85062 13.57188,-30.4225 30.4225,-30.4225z"></path>
                                </g>
                            </g>
                        </svg></i></a>
                <a href="https://www.youtube.com/channel/UC0f7mT4xW0qo8zPrHysZiWA"><i class="icon-google_plus_circle text-size-25 text-dark ml-3"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#e74c3c">
                                    <path d="M69.91699,13.36926c-1.00749,-0.00328 -1.93274,0.55551 -2.3988,1.44873l-11.08069,19.94629l-11.08069,-19.94629c-0.47926,-0.89492 -1.42062,-1.44472 -2.43555,-1.42249c-0.95076,0.0213 -1.81996,0.54196 -2.28738,1.37016c-0.46741,0.82821 -0.46388,1.84141 0.0093,2.66634l13.09631,23.57861v18.11438c0,1.49006 1.20793,2.698 2.698,2.698c1.49006,0 2.698,-1.20793 2.698,-2.698v-18.11963l13.09631,-23.57336c0.48956,-0.83217 0.4967,-1.86262 0.01873,-2.7015c-0.47797,-0.83888 -1.36806,-1.35811 -2.33355,-1.36124zM107.45801,32.20276c-1.48857,0.02184 -2.67765,1.24617 -2.65601,2.73474v14.78125c0,6.65172 5.45253,12.10425 12.10425,12.10425c0.32019,-0.00699 0.63658,-0.07098 0.93433,-0.18896c6.19756,-0.50494 11.16992,-5.59422 11.16992,-11.91528v-14.78125c0,-1.49006 -1.20793,-2.698 -2.698,-2.698c-1.49006,0 -2.698,1.20793 -2.698,2.698v14.78125c0,3.73815 -2.9701,6.70825 -6.70825,6.70825c-3.73815,0 -6.70825,-2.9701 -6.70825,-6.70825v-14.78125c0.01063,-0.72942 -0.27481,-1.43201 -0.79113,-1.94734c-0.51633,-0.51534 -1.21946,-0.79942 -1.94886,-0.7874zM84.65625,32.2395c-6.65172,0 -12.10425,5.45253 -12.10425,12.10425v5.375c0,6.65172 5.45253,12.10425 12.10425,12.10425c0.32019,-0.00699 0.63658,-0.07098 0.93433,-0.18896c6.19756,-0.50494 11.16992,-5.59422 11.16992,-11.91528v-5.375c0,-6.31928 -4.96958,-11.40782 -11.16467,-11.91528c-0.28817,-0.11259 -0.59357,-0.17474 -0.90283,-0.18371c-0.01224,-0.00183 -0.02448,-0.00358 -0.03674,-0.00525zM84.65625,37.6355c3.73815,0 6.70825,2.9701 6.70825,6.70825v5.375c0,3.73815 -2.9701,6.70825 -6.70825,6.70825c-3.73815,0 -6.70825,-2.9701 -6.70825,-6.70825v-5.375c0,-3.73815 2.9701,-6.70825 6.70825,-6.70825zM85.56958,72.552c-19.20436,0 -30.75945,0.25744 -35.68286,0.36218c-1.09441,0.02123 -2.25183,0.03674 -2.25183,0.03674c-0.03674,-0.00075 -0.07349,-0.00075 -0.11023,0c-2.02309,0.10801 -3.98928,0.16927 -5.88415,0.22571c-6.29543,0.19216 -10.96595,0.21212 -14.94922,1.95788c-3.98327,1.74577 -6.58251,5.48986 -7.97327,11.15418c-0.01159,0.04347 -0.02209,0.08723 -0.03149,0.13123c-1.59972,8.27813 -2.56928,19.22481 -2.57202,28.74365c0.00077,0.04203 0.00252,0.08403 0.00525,0.12598c0.07926,1.69877 0.13523,3.43902 0.18896,5.21228c0,0.00175 0,0.0035 0,0.00525l0.03674,1.17578c0.29547,9.9724 0.68711,18.11957 2.86597,24.39221c2.17928,6.27385 6.89778,10.68375 14.04639,11.29065c0.0035,0.00001 0.007,0.00001 0.0105,0c9.75635,0.79556 34.2922,1.20458 52.73169,1.20727c0.00175,0 0.0035,0 0.00525,0c18.45826,-0.00269 42.99476,-0.41027 52.72644,-1.21777c0.00175,0 0.0035,0 0.00525,0c7.15197,-0.60527 11.87593,-5.01663 14.05689,-11.29065c2.18053,-6.27281 2.57184,-14.41693 2.86597,-24.39221v-0.00525l0.02099,-0.69287c0,-0.00175 0,-0.0035 0,-0.00525c0.05902,-1.92913 0.12276,-3.8215 0.19946,-5.49573c0.00273,-0.04195 0.00448,-0.08395 0.00525,-0.12598c0,-9.65543 -0.96488,-20.58913 -2.53003,-28.7279c-0.00766,-0.04395 -0.01641,-0.08771 -0.02625,-0.13123c-1.41037,-5.75408 -4.00981,-9.54443 -8.00476,-11.32214c-3.99495,-1.77772 -8.66954,-1.79723 -14.96497,-1.98938c-0.00175,0 -0.0035,0 -0.00525,0c-1.89227,-0.05362 -3.86304,-0.1105 -5.64795,-0.20996c-0.05068,-0.00318 -0.10144,-0.00493 -0.15222,-0.00525c-0.02311,0 -2.72424,-0.05249 -2.72424,-0.05249c-4.89085,-0.10481 -16.37605,-0.35161 -35.36792,-0.35168h-0.00525l-0.88184,-0.00525c-0.00175,0 -0.0035,0 -0.00525,0zM85.55908,77.948h0.88708c0.0035,0.00001 0.007,0.00001 0.0105,0c18.95059,0 30.36676,0.24163 35.25769,0.34643c0,0 2.21772,0.05774 2.83972,0.05774c1.83947,0.10006 3.79372,0.16267 5.64795,0.21521c6.29134,0.19213 10.51713,0.44691 12.93359,1.52222c2.40538,1.07037 3.72371,2.72604 4.93408,7.62683c1.46464,7.64884 2.4198,18.36577 2.4198,27.63086c-0.07673,1.69875 -0.13627,3.56538 -0.19421,5.45898l-0.02099,0.69812c0,0.00175 0,0.0035 0,0.00525c-0.29173,9.89616 -0.82318,17.75506 -2.57202,22.78601c-1.74884,5.03095 -3.96166,7.22291 -9.41675,7.68457c-9.11976,0.7564 -33.90605,1.19401 -52.28027,1.19678h-0.00525c-18.35353,-0.00269 -43.12371,-0.4397 -52.28552,-1.18628c-5.45028,-0.46285 -7.66367,-2.65278 -9.4115,-7.68457c-1.74783,-5.03178 -2.27895,-12.89235 -2.57202,-22.78601c0,-0.00175 0,-0.0035 0,-0.00525l-0.03674,-1.17578v-0.00525c-0.05243,-1.73032 -0.10503,-3.45578 -0.18372,-5.17029c0.00263,-9.12088 0.9626,-19.8433 2.46179,-27.63611c1.18737,-4.80179 2.47583,-6.40448 4.88159,-7.45886c2.41701,-1.05932 6.65383,-1.30907 12.94934,-1.50122c1.86139,-0.05544 3.84015,-0.11711 5.90515,-0.22571c0,0 1.17074,-0.01506 2.28858,-0.03674c0.00175,0 0.0035,0 0.00525,0c4.9275,-0.10484 16.41005,-0.35678 35.55689,-0.35693zM42.95801,85.95276c-0.12317,0.00384 -0.24594,0.01611 -0.36743,0.03674h-10.34058c-1.49006,0 -2.698,1.20793 -2.698,2.698c0,1.49006 1.20793,2.698 2.698,2.698h8.052v37.6145c0,1.49006 1.20793,2.698 2.698,2.698c1.49006,0 2.698,-1.20793 2.698,-2.698v-37.6145h8.052c1.49006,0 2.698,-1.20793 2.698,-2.698c0,-1.49006 -1.20793,-2.698 -2.698,-2.698h-10.33008c-0.15263,-0.02548 -0.30717,-0.03778 -0.46191,-0.03674zM91.33301,85.95276c-1.48857,0.02184 -2.67765,1.24617 -2.65601,2.73474v15.70508c-0.04278,0.27479 -0.04278,0.55455 0,0.82935v23.35815c-0.1306,0.83677 0.13961,1.68627 0.72961,2.29382c0.02732,0.03038 0.05532,0.06013 0.08398,0.08923c0.60659,0.59191 1.45621,0.8641 2.29382,0.73486h6.30933c7.76762,0 14.01721,-6.12292 14.58179,-13.75244c0.1381,-0.32912 0.20946,-0.68239 0.20996,-1.03931c0,-8.1356 -6.65615,-14.79175 -14.79175,-14.79175h-4.02075v-13.427c0.01063,-0.72942 -0.27481,-1.43201 -0.79113,-1.94734c-0.51633,-0.51534 -1.21946,-0.79942 -1.94886,-0.7874zM59.08301,102.07776c-1.48857,0.02184 -2.67765,1.24617 -2.65601,2.73474v14.78125c0,6.31928 4.96958,11.40782 11.16467,11.91528c0.28817,0.11259 0.59357,0.17474 0.90283,0.18371c0.01224,0.00183 0.02448,0.00358 0.03674,0.00525c0.32019,-0.00699 0.63658,-0.07098 0.93433,-0.18896c6.19756,-0.50494 11.16992,-5.59422 11.16992,-11.91528v-14.78125c0,-1.49006 -1.20793,-2.698 -2.698,-2.698c-1.49006,0 -2.698,1.20793 -2.698,2.698v14.78125c0,3.73815 -2.9701,6.70825 -6.70825,6.70825c-3.73815,0 -6.70825,-2.9701 -6.70825,-6.70825v-14.78125c0.01063,-0.72942 -0.27481,-1.43201 -0.79113,-1.94734c-0.51633,-0.51534 -1.21946,-0.79942 -1.94886,-0.7874zM133.03125,102.1145c-6.65172,0 -12.10425,5.45253 -12.10425,12.10425v0.92383c-0.04278,0.27479 -0.04278,0.55455 0,0.82935v3.62183c0,6.65172 5.45253,12.10425 12.10425,12.10425c0.4847,-0.00909 0.95798,-0.14872 1.37,-0.40417c4.16936,-0.51411 7.82254,-2.84675 9.56372,-6.50879c0.43681,-0.8723 0.36828,-1.91253 -0.1792,-2.71997c-0.54748,-0.80745 -1.48847,-1.25612 -2.46049,-1.17318c-0.97202,0.08294 -1.8234,0.68455 -2.22616,1.57308c-1.07585,2.26273 -3.36911,3.83704 -6.06787,3.83704c-3.73815,0 -6.70825,-2.9701 -6.70825,-6.70825v-1.33325h16.1145c0.71573,0.00058 1.40231,-0.28349 1.90841,-0.78959c0.5061,-0.5061 0.79017,-1.19268 0.78959,-1.90841v-1.34375c0,-6.65172 -5.45253,-12.10425 -12.10425,-12.10425zM94.073,107.5105h4.02075c5.22128,0 9.39575,4.17447 9.39575,9.39575c0,5.22128 -4.17447,9.39575 -9.39575,9.39575h-4.02075zM133.03125,107.5105c3.20585,0 5.46422,2.37352 6.15185,5.35401h-12.30371c0.68763,-2.98048 2.946,-5.35401 6.15185,-5.35401zM32.25,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM45.6875,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM59.125,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM72.5625,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM86,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM99.4375,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM112.875,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM126.3125,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM139.75,137.0625c-1.4835,0 -2.6875,1.204 -2.6875,2.6875v5.375c0,1.4835 1.204,2.6875 2.6875,2.6875c1.4835,0 2.6875,-1.204 2.6875,-2.6875v-5.375c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875z"></path>
                                </g>
                            </g>
                        </svg></i></a>
            </div>

            <!-- Footer -->
            <footer>
                <img src="assets/img/footerActa.png" class="imgFooterDesk" alt="">
                <img src="assets/img/footerMobile.png" class="imgFooterMob" alt="">
                <div class="contain">
                    <div class="text-center enlFooter">
                        <a href="#enVideos" class="mr-md-5 mr-2 text-white lang" key="footerTienda">Tienda</a>
                        <spam href="#" class="mr-md-5 mr-2 text-white-50">|</spam>
                        <a href="#enVideos" class=" mr-md-5 mr-2 text-white lang" key="footerMundos">Videos</a>
                        <spam href="#" class="mr-md-5 mr-2 text-white-50">|</spam>
                        <a href="#enVideos" class="mr-md-5 mr-2 text-white lang" key="footerContenidos">Contenidos</a>
                    </div>
                    <h5 class="text-white mt-3 h2Footer lang" key="footer1p">¿No tienes un servidor de construcción profesional público donde construir?</h5>
                    <h5 class="text-white mt-0 h2Footer lang" key="footer2p">Entra a play.dragonclub.es - Versión: 1.12.2</h5>
                    <h5 class="text-white mt-0 h2Footer lang" key="footer3p">¡Disfruta de tu estadía!</h5>

                    <p class="text-right pFoo">Copyright 2020 - DragonClub Studios</p>
                </div>
            </footer>


            <a href="#anchorTarget" class="anchorLink"><button class="back-to-top" type="button"><img src="assets/img/icons8-up-48.png" alt=""></button></a>


            <!-- Bootstrap core JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
            <!-- Third party plugin JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.parallax.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/magnific-popup-options.js"></script>
            <script src="js/smoothscroll.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/custom.js"></script>
</body>

</html>
