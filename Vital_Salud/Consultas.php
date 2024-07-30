<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-CO">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Consultas</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Consultas.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

    <script>
    function mostrarFechaHora() {
        var fechaHoraActual = new Date();
        var fecha = fechaHoraActual.toLocaleDateString();
        var hora = fechaHoraActual.toLocaleTimeString();
        var contenedorFechaHora = document.getElementById("fecha-hora");
        contenedorFechaHora.innerHTML = "Fecha: " + fecha + " Hora: " + hora;
    }
    setInterval(mostrarFechaHora, 1000);
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Consultas">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
<?php  include ("conexion.php "); ?>
<?php include("contador.php"); ?>

<body class="u-body">
    <header class="u-clearfix u-gradient u-header u-header" id="sec-7aea">
        <div class="u-clearfix u-sheet u-sheet-1">
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-1-base"
                            href="Pasaporte-Covid.php" style="padding: 10px 20px;">MISIÓN</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-1-base"
                            href="Para-que-sirve.php" style="padding: 10px 20px;">VISIÓN</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-1-base"
                            href="Estadisticas.php" style="padding: 10px 20px;">ESTADISTICAS</a>
                    </li>
                    </ul>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <img class="u-image u-image-round u-radius-10 u-image-1" src="images/Uniminuto.png" alt=""
                data-image-width="266" data-image-height="189">
            <h6>Fecha y Hora Actual:</h6>
            <div id="fecha-hora"></div>
        </div>
    </header>
    <section
        class="skrollable u-align-center u-border-2 u-border-palette-1-base u-clearfix u-image u-parallax u-section-1"
        id="sec-4765" data-image-width="1200" data-image-height="675">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1">CONSULTA</h1>
            <div class="u-form u-form-1">
                <form action="FormularioDatos.php" method="POST"
                    class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form"
                    source="custom" name="Consultar" style="padding: 10px;" redirect="true">
                    <div class="u-form-group u-form-select u-form-group-1">
                        <label for="select-4442" class="u-label u-text-palette-1-base u-label-1">Tipo Documento</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-4442" name="Tipo_Documento"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-39 u-text-palette-1-base u-white u-input-1"
                                required="required">
                                <option value="CC">CC</option>
                                <option value="CE">CE</option>
                                <option value="PE">PE</option>
                                <option value="RC">RC</option>
                                <option value="TI">TI</option>
                                <option value="PS">PS</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group">
                        <label for="email-e475" class="u-label u-text-palette-1-base u-label-2">Nùmero de
                            Documento</label>
                        <input placeholder="Ingrese el Nùmero de Documento" id="email-e475" name="Numero_Documento"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-39 u-text-palette-1-base u-white u-input-2"
                            required="required" type="text">
                    </div>
                    <input type="submit" value="CONSULTAR" name="CONSULTAR"
                        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-10">
                    <a href="index.html" data-page-id="359922106"
                        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">REGRESAR</a>
                    <a href="https://www.google.com/" data-page-id="359922106"
                        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">SALIR</a>
            </div>
            </form>
        </div>
        </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-c6e2">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Creado Por: <br> Diego Fernando Navarrete Acuña
                ID:420624&nbsp;
        </div>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.3.5/web3.min.js"></script>
    <script type="text/javascript" src="src/utils.js"></script>
    <script type="text/javascript" src="src/index.js"></script>
</body>

</html>