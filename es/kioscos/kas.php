<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/iconos/favicon-xilion.svg">
    <link rel="stylesheet" href="/styles-kioscos.css">
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PNNQNVT');
    </script>
    <!-- End Google Tag Manager -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .blue {
            position: unset !important;
            background: linear-gradient(180deg, #07192B 43.82%, #07192B 100%), #FFFFFF;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @media(max-width: 600px) {
            .blue {
                height: fit-content;
            }

            .wappicon {
                bottom: 12rem;
            }
        }
    </style>

    <title>Xilion | Fabricante Experto en Kioscos y Cajeros Digitales</title>
    <meta name="description"
        content="Somos especialistas con más de 20 años de experiencia en Kioscos y Cajeros Interactivos. Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando soluciones extraordinarias.">
    <meta property="og:title"
        content="Xilion | Software Factory, Kioscos y Cajeros digitales, Ecommerce, Movilidad, Apps, Innovación y más">
    <meta property="og:description"
        content="Somos especialistas con más de 20 años de experiencia en Kioscos y Cajeros Interactivos. Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando productos y soluciones extraordinarias.">
    <meta property="og:image" content="/img/iconos/favicon-xilion.svg">
    <meta name="keywords"
        content="xilion, diseño, desarrollo, startup, innovación, kioscos digitales, cajeros digitales, kioscos interactivos, kioscos autoservicio, php, node, javascript, java, angularjs, reactjs, ios, android, app, mantenimiento, mejoras, desarrollo de hardware, hardware, outsourcing de desarrollo de software, desarrollo de software, desarrollo web, consultoría de ecommerce, integraciones de ecommerce, consultores de ecommerce, ecommerce, desarrollo de sitios web, react native, desarrollo de aplicaciones react native, desarrollo de aplicaciones móviles, gestión de productos, diseño ux, diseño ui, descubrimiento ux, auditoría ux, test de usabilidad, control de calidad, qa, marketing digital, Sistema de cobro, Yimi, parking, Yimi Gov" />
    <meta name="robots" content="index,follow" />
    <meta property="og:url" content="https://xilion.io/es/index.php">
    <meta property="og:type" content="website">
    <meta property=”og:site_name” content=”Xilion”>
    <meta property="twitter:title"
        content="Xilion | Software Factory, Kioscos y Cajeros digitales, Ecommerce, Movilidad, Apps, Innovación y más">
    <meta property="twitter:description"
        content="Somos especialistas con más de 20 años de experiencia en Kioscos y Cajeros Interactivos. Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando productos y soluciones extraordinarias.">
    <meta content="summary_large_image" name="twitter:card">
    <meta name=”twitter:image” content=”https://www.xilion.io/img/iconos/favicon-xilion.svg”>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNNQNVT" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include_once '../../includes/templates/header-kioscos.php' ?>
    <div class="kioscos-first" style="padding: 7rem 12rem;">
        <div class="backgroundImg">
            <img src="../../assets-landings/assets-kioscos/kas/X140.svg" alt="">
        </div>
        <div class="kk-header">
            <p class="title">¡Tu Nuevo <span>Kiosco</span> con Software Inteligente!</p>
            <p class="text"><span>Digitaliza todos tus servicios y automatiza los procesos de clientes y empleados.</p>
            <div class="footer-contact flex-c collapsed">
                <form action="/es/contacto.php">
                    <input class="footer-input" id="correo" type="email" placeholder="Mi email es" required="">
                    <button href="/es/contacto.php" class="footer-button" type="input" onclick="llevar();">Quiero
                        información</button>
                </form>
            </div>
            <div class="d-flex jc-center" style="gap: 3rem; width: 100%; flex-wrap: wrap;">
                <div class="d-flex leaf-block ai-center">
                    <img src="../../assets-landings/assets-kioscos/leaf_left.svg" alt="">
                    <div class="d-flex fd-column ai-center">
                        <p>+6,500</p>
                        <p>Kioscos activos</p>
                    </div>
                    <img src="../../assets-landings/assets-kioscos/leaf_right.svg" alt="">
                </div>
                <div class="d-flex leaf-block ai-center">
                    <img src="../../assets-landings/assets-kioscos/leaf_left.svg" alt="">
                    <div class="d-flex fd-column ai-center">
                        <p>+40 Millones</p>
                        <p>Transacciones Seguras</p>
                    </div>
                    <img src="../../assets-landings/assets-kioscos/leaf_right.svg" alt="">
                </div>
                <div class="d-flex leaf-block ai-center" id="yearsExperience">
                    <img src="../../assets-landings/assets-kioscos/leaf_left.svg" alt="">
                    <div class="d-flex fd-column ai-center">
                        <p>26</p>
                        <p>Años de experiencia</p>
                    </div>
                    <img src="../../assets-landings/assets-kioscos/leaf_right.svg" alt="">
                </div>
            </div>
            <div class="bulb_chip d-flex ai-center">
                <img src="" alt="">
                <p>Mejor Fabricación, Precio y Software del Mercado</p>
            </div>
        </div>
        <div class="backgroundImgRigth">
            <img src="../../assets-landings/assets-kioscos/kas/X-24.svg" alt="">
        </div>
    </div>
    </div>
    <div class="exp flex-c">
        <section class="exp flex-c container" style="gap: 2rem;padding-bottom: 6rem;">
            <h1>Servicios disponibles</h1>
            <div class="tabs-frame" style="max-width: 120rem;">
                <div class="tabs-container" id="tabsPdvApp">
                    <div>
                        <div class="kiosk-features">
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/selfservice.svg" alt="">
                                </div>
                                <p>Compra y venta</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/check-in.svg" alt="">
                                </div>
                                <p>Entrada y salida</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/satisfaction.svg" alt="">
                                </div>
                                <p>Encuestas</p>
                            </div>
                        </div>
                        <div class="kiosk-features">
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/kas/tramites_gub.svg" alt="">
                                </div>
                                <p>Tramites gubernamentales</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/RRHH.webp" alt="">
                                </div>
                                <p>Recursos humanos</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/tomaturnos.svg" alt="">
                                </div>
                                <p>Tomaturnos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttonServices">
                    ¿Servicio propio? Lo integramos!
                </div>
            </div>
        </section>
    </div>
    <section class="aplications">
        <div class="content">
            <h1>¿Buscas fabricante para tu Proyecto?</h1>
            <h2>Conecta con nuestro equipo de expertos, resolveremos tus dudas lo más pronto posible</h2>
            <div class="buttonServices">
                Cotizar mi proyecto
            </div>
        </div>
    </section>
    <div class="business">
        <h1> Diseño de clase mundial</h1>
        <div class="kioscos-prices">
            <div class="kiosco-card">
                <div class="kioscoImgContainer">
                    <img src="/assets-landings/assets-kioscos/kas/X-12.png" alt="">
                </div>
                <div class="price-content">
                    <p>Kiosco X12</p>
                    <div class="price">
                        <p>Desde</p>
                        <h2>$41,777</h2>
                    </div>
                    <div class="screenInfo">
                        <img src="/assets-landings/assets-kioscos/kas/computer.svg" alt="">
                        <p>Pantalla touch 12” Full HD</p>
                    </div>
                    <div class="functionsKioscos">
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Vinil personalizado</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Cámara HD</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Lector de QR/Barras</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Impresora de recibos</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Teclado antivandálico</p>
                        </div>
                    </div>
                    <div class="buttonServices">
                        Cotizar Kiosco X12
                    </div>
                    <div class="textA">
                        Ver brochure
                    </div>
                </div>
            </div>
            <div class="kiosco-card">
                <div class="kioscoImgContainer">
                    <img src="/assets-landings/assets-kioscos/kas/X-24.png" alt="">
                </div>
                <div class="price-content">
                    <p>Kiosco X24</p>
                    <div class="price">
                        <p>Desde</p>
                        <h2>$73,397</h2>
                    </div>
                    <div class="screenInfo">
                        <img src="/assets-landings/assets-kioscos/kas/computer.svg" alt="">
                        <p>Pantalla touch 24” Full HD</p>
                    </div>
                    <div class="functionsKioscos">
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Vinil personalizado</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Cámara HD</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Lector de QR/Barras</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Impresora de recibos</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Teclado antivandálico</p>
                        </div>
                    </div>
                    <div class="buttonServices">
                        Cotizar Kiosco X24
                    </div>
                    <div class="textA">
                        Ver brochure
                    </div>
                </div>
            </div>
            <div class="kiosco-card">
                <div class="kioscoImgContainer">
                    <img src="/assets-landings/assets-kioscos/kas/X140.png" alt="">
                    <div class="newModel">
                        <img src="/assets-landings/assets-kioscos/kas/stars.png" alt="">
                        <p>NUEVO MODELO</p>
                    </div>
                </div>
                <div class="price-content">
                    <p>Kiosco X140</p>
                    <div class="price">
                        <h2>Cotiza Ahora</h2>
                    </div>
                    <div class="screenInfo">
                        <img src="/assets-landings/assets-kioscos/kas/computer.svg" alt="">
                        <p>Pantalla touch 32” Full HD</p>
                    </div>
                    <div class="functionsKioscos">
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Validador y dispensador de efectivo</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Impresora</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Vinil personalizado</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Cámara HD</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Lector de QR/Barras</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Impresora de recibos</p>
                        </div>
                        <div class="check">
                            <img src="/assets-landings/assets-kioscos/kas/Check.svg" alt="">
                            <p>Teclado antivandálico</p>
                        </div>
                    </div>
                    <div class="buttonServices">
                        Cotizar Kiosco X140
                    </div>
                    <div class="textA">
                        Ver brochure
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="exp flex-c kiosc-blue">
        <section class="exp flex-c container kiosc-blue" style="padding-bottom: 6rem; overflow: visible">
            <div class="kioscos-first">
                <div class="kioscos-header">
                    <p class="kiosc-blue-small">Casos de Éxito</p>
                    <p class="kiosc-blue-title">Pirelli</p>
                    <p class="fancy-p">Los kioscos digitales automatizaron procesos previos de recopilación manual de
                        información, generación de informes y compartición de datos entre departamentos, ahorrándonos
                        tiempo y recursos valiosos en nuestras líneas de producción.</p>
                </div>
                <div class="kiosco-block-container">
                    <div class="kiosco-block active">
                        <img class="kiosco-logo" src="/assets-landings/assets-kioscos/hkioscos/logo-guadalajara.svg"
                            alt="Itei">
                    </div>
                    <!-- <div class="kiosco-block active">
                        <img class="kiosco-logo" src="/assets-landings/assets-kioscos/hkioscos/logo-bancomer.svg" alt="Itei">
                    </div> -->
                    <div class="kiosco-block">
                        <img class="kiosco-logo" src="/assets-landings/assets-kioscos/hkioscos/logo-banjercito.svg"
                            alt="Itei">
                    </div>
                    <div class="kiosco-block">
                        <img class="kiosco-logo" src="/assets-landings/assets-kioscos/hkioscos/logo-pirelli.svg"
                            alt="Itei">
                    </div>
                    <div class="kiosco-block">
                        <img class="kiosco-logo" src="/assets-landings/assets-kioscos/hkioscos/logo-elementia.svg"
                            alt="Itei">
                    </div>
                    <div class="slide-element"></div>
                </div>
                <div id="kioscosImg">
                    <div style="display: flex;
                position: absolute;
                right: 0rem;
                top: 1rem;
                "> <img class="kiosco-shown active"
                            src="/assets-landings/assets-kioscos/hkioscos/kiosco-guadalajara.webp" alt="">
                    </div>
                    <!-- <img class="kiosco-shown" src="/assets-landings/assets-kioscos/hkioscos/kiosco-bbva.webp" alt=""> -->
                    <div style="display: flex;
                position: absolute;
                right: 0rem;
                top: 1rem;
                "> <img class="kiosco-shown" src="/assets-landings/assets-kioscos/hkioscos/kiosco-banjercito.webp"
                            alt="">
                    </div>
                    <div style="display: flex;
                position: absolute;
                right: 0rem;
                top: 1rem;
                "> <img class="kiosco-shown" src="/assets-landings/assets-kioscos/hkioscos/kiosco-pirelli.webp" alt="">
                    </div>
                    <div style="display: flex;
                position: absolute;
                right: 0rem;
                top: 1rem;
                "> <img class="kiosco-shown" src="/assets-landings/assets-kioscos/hkioscos/kiosco-elementia.webp"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="manage">
        <h1>Toda la gestión en un solo lugar</h1>
        <div class="manageFunctions">
            <div class="manageCard">
                <div class="check">
                    <img src="/assets-landings/assets-kioscos/kas/feature.svg" alt="">
                </div>
                <div class="borderCard">
                    <h3>Gestión de contenidos</h3>
                    <p>Personaliza lo que se muestra al cliente desde la plataforma <span>XilionChannel</span> </p>
                </div>
            </div>
            <div class="manageCard">
                <div class="check">
                    <img src="/assets-landings/assets-kioscos/kas/feature.svg" alt="">
                </div>
                <div class="borderCard">
                    <h3>Estadísticas y monitoreo</h3>
                    <p>Visualiza métricas importantes en tiempo real y el estado de tus kioscos</p>
                </div>
            </div>
        </div>
        <div class="imgSection">
            <img src="/assets-landings/assets-kioscos/kas/image303.png" alt="">
        </div>
    </div>
    <section class="aplications">
        <div class="content">
            <h1>Automatiza tus procesos y digitalizate</h1>
            <h2>Conecta con nuestro equipo de expertos, resolveremos tus dudas lo más pronto posible</h2>
            <div class="buttonServices">
                Cotizar mi proyecto
            </div>
        </div>
    </section>
    <h1>¿Que nos hace diferentes?</h1>
    <div class="diferencesSection">
        <div class="diferences">
            <div class="diferencesCard">
                <div class="imgDiferences">
                    <img src="/assets-landings/assets-kioscos/kas/frame.svg" alt="">
                </div>
                <div class="content">
                    <h3>Desarrollo a Medida</h3>
                    <p>Todo a la medida, alineado a tu imagen y tus necesidades</p>
                </div>
            </div>
            <div class="diferencesCard">
                <div class="imgDiferences">
                    <img src="/assets-landings/assets-kioscos/kas/headsets.svg" alt="">
                </div>
                <div class="content">
                    <h3>Soporte Integral</h3>
                    <p>Pólizas de soporte integrales con presencia física a nivel nacional</p>
                </div>
            </div>
            <div class="diferencesCard">
                <div class="imgDiferences">
                    <img src="/assets-landings/assets-kioscos/kas/24h.svg" alt="">
                </div>
                <div class="content">
                    <h3>Equipo especializado</h3>
                    <p>Más de 60 personas para cumplir tus requerimientos</p>
                </div>
            </div>
        </div>
        <div class="diferences">
            <div class="diferencesCard">
                <div class="imgDiferences">
                    <img src="/assets-landings/assets-kioscos/kas/strong.svg" alt="">
                </div>
                <div class="content">
                    <h3>Robustez</h3>
                    <p>Fabricados para uso rudo,bajo normas internacionales</p>
                </div>
            </div>
            <div class="diferencesCard">
                <div class="imgDiferences">
                    <img src="/assets-landings/assets-kioscos/kas/Vector.svg" alt="">
                </div>
                <div class="content">
                    <h3>Gestión Remota</h3>
                    <p>Software de gestión y monitoreo remoto para kioscos digitales</p>
                </div>
            </div>
            <div class="diferencesCard">
                <div class="imgDiferences">
                    <img src="/assets-landings/assets-kioscos/kas/key.svg" alt="">
                </div>
                <div class="content">
                    <h3>Soluciones Completas</h3>
                    <p>Proyectos llave en mano</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-c">
        <section class="formu container flex-c"
            style="margin-left: 2rem; margin-right: 2rem;box-shadow: 0px 3px 20px 3px rgba(0, 0, 0, 0.06);">
            <div class="form-image">
                <img src="/assets-landings/assets-contacto/contact-us.svg" alt="image">
                <section class="contact-buttons">
                    <a
                        href="mailto:sales@xilion.io?subject=SOLICITUD%20DE%20COTIZACIÓN%20XILION&body=Hola!%20Quiero%20informacion%20sobre%20sus%20soluciones!">
                        <img src="/assets-landings/assets-contacto/contact-email.svg" alt="Icono de email">
                        <p>sales@xilion.io</p>
                    </a>
                    <a href="tel:3334009635">
                        <img src="/assets-landings/assets-contacto/contact-call.svg" alt="Icono de teléfono">
                        <p>333 400 9635</p>
                    </a>
                </section>
            </div>
            <div class="form-inputs">
                <div class="input-container">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" maxlength="50"
                        required>
                    <label for="nombre">Nombre *</label>
                </div>
                <div class="input-container">
                    <input type="text" id="email" name="email" placeholder="Ingresa tu correo electrónico de empresa"
                        required>
                    <label for="email">Email de trabajo *</label>
                </div>
                <div class="input-container">
                    <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu teléfono" maxlength="10"
                        required>
                    <label for="telefono">Teléfono *</label>
                </div>
                <div class="input-container">
                    <textarea id="mensaje" name="mensaje" placeholder="" required></textarea>
                    <label for="mensaje">Descríbenos tu proyecto</label>
                </div>
                <div class="send-container">
                    <div class="online">
                        <div></div>
                        <p>En línea</p>
                    </div>
                    <div class="send-form" id="enviarForm">
                        <p>Continuar</p>
                    </div>
                </div>
            </div>
            <!-- <div class="contactfield">
                <form>
                    <div>
                        <input type="text" id="nombre" required="" placeholder="Nombre">
                    </div>
                    <div>
                        <input type="email" id="email" required="" placeholder="E-mail">
                    </div>
                    <div>
                        <input type="tel" id="telefono" placeholder="Teléfono (Opcional)">
                    </div>
                    <div>
                        <textarea id="mensaje" placeholder="Descríbenos tu proyecto (Opcional)"></textarea>
                    </div>
                    <input type="file" id="actual-btn" aria-label="Archivo" hidden/>
                    <label class="projectfileupload flex-c pointer" for="actual-btn" id="project">Adjuntar archivo</label>
                    <button id="enviarForm" type="button" value="Enviar" class="boton-contacto pointer">
                      Enviar
                </button>
                </form>
            </div> -->
        </section>
    </div>
    <?php include_once '../../includes/templates/footerKas.php' ?>


    <script>
        var vh = (self.innerHeight * 0.7);
        window.onscroll = function () {
            scrollFunction()
        };

        function myFunction(x) {
            x.classList.toggle("change");
        }

        function scrollFunction() {
            if (document.body.scrollTop > vh || document.documentElement.scrollTop > vh) {
                document.getElementById("kioscos").style.borderRadius = "0rem";
            } else {
                document.getElementById("kioscos").style.borderRadius = "30rem 30rem 0rem 0rem";
            }

        }

        $(".adapt-tab-button").click(function () {
            var id = $(this).parent().data('id');
            var tabnum = $(this).index();
            var container = $(`#${id}`);
            var tabs = container.children().length;

            $(".adapt-tab-button").removeClass('active');
            $(this).toggleClass('active');

            container.attr('style', `width: ${container.children().length}00%;transform: translateX(-${tabnum * (100 / tabs)}%)`);
            container.children(tabnum).children(0).removeClass('tab-not-shown');
            container.children().each(function (index) {
                if (index == tabnum) {
                    $(this).children(0).removeClass('tab-not-shown');
                } else {
                    $(this).children(0).addClass('tab-not-shown');
                }
            });

            console.log(tabnum);
            console.log(tabs);



            if (window.screen.width <= ($(this).parent().get(0).clientWidth + 60)) {
                $('.adapt-tab-selector').addClass('flex-start')
                if (tabnum == 0) {
                    $('.adapt-tab-selector').attr('style', `transform: translateX(0%)`)
                } else if (tabnum == tabs - 1) {
                    $('.adapt-tab-selector').attr('style', `transform: translateX(${-$(this).parent().get(0).clientWidth + window.screen.width - 0}px)`)
                } else {
                    $('.adapt-tab-selector').attr('style', `transform: translateX( calc(${window.screen.width / 2}px - ${$(this).get(0).clientWidth / 2}px - ${$(this).get(0).offsetLeft}px - 15px) )`);
                }
            }

            $(this).parent().find('.back-slide').attr('style', `width: ${$(this).get(0).clientWidth}px; left: ${$(this).get(0).offsetLeft}px`);
        });
        document.getElementById('tabsPdvApp').addEventListener('touchstart', handleTouchStart, { passive: true });
        document.getElementById('tabsPdvApp').addEventListener('touchmove', handleTouchMove, { passive: true });

        function changeTabSwipe(sentido) {
            var currentTab = parseInt($('.adapt-tab-button.active').index());
            var tabs = $('.adapt-tab-button').length;
            switch (sentido) {
                case 'next':
                    if (currentTab < (tabs - 1)) {
                        $('.adapt-tab-button').get(currentTab + 1).click();
                    } else {
                        var currentStyle = $('#tabsPdvApp').attr('style');
                        var currentPercent = currentStyle.split('(').pop().split(')')[0];
                        var newPercent = `${parseFloat(currentPercent.replace('%', '')) - 1}%`
                        $('#tabsPdvApp').attr('style', currentStyle.replace(currentPercent, newPercent));
                        setTimeout(() => {
                            $('#tabsPdvApp').attr('style', currentStyle);
                        }, 300);
                    }
                    break;
                case 'prev':
                    if (currentTab != 0) {
                        $('.adapt-tab-button').get(currentTab - 1).click();
                    } else {
                        var currentStyle = $('#tabsPdvApp').attr('style');
                        var currentPercent = currentStyle.split('(').pop().split(')')[0];
                        var newPercent = `${parseFloat(currentPercent.replace('%', '')) + 1}%`
                        $('#tabsPdvApp').attr('style', currentStyle.replace(currentPercent, newPercent));
                        setTimeout(() => {
                            $('#tabsPdvApp').attr('style', currentStyle);
                        }, 300);
                    }
                    break;
            }
        }

        var xDown = null;
        var yDown = null;

        function getTouches(evt) {
            return evt.touches || // browser API
                evt.originalEvent.touches; // jQuery
        }

        function handleTouchStart(evt) {
            const firstTouch = getTouches(evt)[0];
            xDown = firstTouch.clientX;
            yDown = firstTouch.clientY;
        };

        function handleTouchMove(evt) {
            if (!xDown || !yDown) {
                return;
            }

            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;

            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;

            if (Math.abs(xDiff) > Math.abs(yDiff)) { /*most significant*/
                if (xDiff > 0) {
                    /* right swipe */
                    changeTabSwipe('next');
                } else {
                    /* left swipe */
                    changeTabSwipe('prev');
                }
            }
            // else {
            //     if (yDiff > 0) {
            //         /* down swipe */
            //     } else {
            //         /* up swipe */
            //     }
            // }
            /* reset values */
            xDown = null;
            yDown = null;
        };

        function fadeSlow(index) {
            $('.kiosco-shown').eq(index).fadeIn('slow');
        }
        function classSlow(index) {
            $('.kiosco-shown').eq(index).addClass('active');
        }

        $(document).ready(function () {
            $('.contactar').attr('onclick', 'solution("Kioscos")');


            $('.kiosco-block').mouseenter(function () {
                clearTimeout(timeOut);

                $('.kiosco-block').removeClass('active');
                $(this).addClass('active');

                var index = $(this).index();
                var width = $(this).get(0).clientWidth;
                var tabs = $('.kiosco-block-container').children().length - 1;

                if (window.screen.width <= ($(this).parent().get(0).clientWidth + 60)) {
                    if (index <= 0) {
                        $('.kiosco-block-container').attr('style', `transform: translateX(0%)`)
                    } else if (index >= tabs - 1) {
                        if (window.screen.width <= 600) {
                            $('.kiosco-block-container').attr('style', `transform: translateX(${-$(this).parent().get(0).clientWidth + window.screen.width - 0}px)`)
                        } else {
                            $('.kiosco-block-container').attr('style', `transform: translateX(${-$(this).parent().get(0).clientWidth + window.screen.width - 10}px)`)
                        }
                    } else {
                        $('.kiosco-block-container').attr('style', `transform: translateX( calc(${window.screen.width / 2}px - ${$(this).get(0).clientWidth / 2}px - ${$(this).get(0).offsetLeft}px) )`);
                    }
                }
                $('.slide-element').attr('style', `transform: translateX(${index * width + index * 20}px);`);
                $('.kiosco-shown').removeClass('active');
                var timeOut = setTimeout(classSlow(index), 600);
            });
            $('.adapt-tab-selector').children()[0].click();
        });
    </script>
    <script type="text/javascript" src="/script-landings.js"></script>
</body>

</html>