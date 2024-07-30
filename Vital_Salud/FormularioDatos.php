<?php
include ("conexion.php ");

$Numero = ($_POST['Numero_Documento']);
$consulta="SELECT TIPO_DOCUMENTO, NUMERO_DOCUMENTO, NOMBE_APELLIDO, CIUDAD, REGIMEN, EPS,
CENTRO_ATENCION, FECHA_PRUEBA, RESULTADO, TIPO_VACUNA, LUGAR_VACUNACION, FECHA_PRIMERA_DOSIS, FECHA_SEGUNDA_DOSIS
FROM  registro where NUMERO_DOCUMENTO='$Numero'"; 
if($resultado = mysqli_query($conex, $consulta)){
$GET = mysqli_fetch_assoc($resultado) 
  

?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php  mysqli_free_result($resultado);
  
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Consulta</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Registro.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>

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
    <meta property="og:title" content="Registro">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>

<body>
    <nav class="u-body">
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
                    </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
    </nav>
    <img class="u-image u-image-round u-radius-10 u-image-1" src="images/Uniminuto.png" alt="" data-image-width="266"
        data-image-height="189">
    <h6>Fecha y Hora Actual:</h6>
    <div id="fecha-hora"></div>
    </div>
    </header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_aa4a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-palette-1-light-1 u-text-1">CONSULTA</h2>
            <div class="u-align-center u-form u-form-1">
                <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-1">
                    <label for="select-faf0"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Tipo Documento</label>
                    <div class="u-form-select-wrapper">
                        <input id="select-faf0" name="Tipod" value="<?php echo $GET["TIPO_DOCUMENTO"];?>"
                            class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                            required="required">
                    </div>
                </div>
                <div class="u-form-group u-form-name u-form-partition-factor-2">
                    <label for="name-6797"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Numero Documento</label>
                    <input type="text" placeholder="" id="name-6797" name="numero"
                        value="<?php echo $GET["NUMERO_DOCUMENTO"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                <div class="u-form-group u-form-name u-form-group-3">
                    <label for="name-9de0"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Nombre y
                        Apellido</label>
                    <input type="text" placeholder="" id="name-9de0" name="nombreapellido"
                        value="<?php echo $GET["NOMBE_APELLIDO"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                <div class="u-form-address u-form-group u-form-partition-factor-2 u-form-group-4">
                    <label for="address-09a7"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Ciudad</label>
                    <input type="text" placeholder="" id="address-09a7" name="ciudad"
                        value="<?php echo $GET["CIUDAD"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-5">
                    <label for="select-eaf3"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Regimen</label>
                    <div class="u-form-select-wrapper">
                        <input id="select-eaf3" name="regimen" value="<?php echo $GET["REGIMEN"];?>"
                            class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                            required="required">
                    </div>
                </div>
                <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-6">
                    <label for="name-00c0"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">EPS</label>
                    <input type="text" placeholder="" id="name-00c0" name="eps" value="<?php echo $GET["EPS"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-7">
                    <label for="name-1d57"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">CENTRO ATENCIÒN</label>
                    <input type="text" placeholder="" id="name-1d57" name="centroa"
                        value="<?php echo $GET["CENTRO_ATENCION"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-8">
                    <label for="select-3692"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Resultado</label>
                    <div class="u-form-select-wrapper">
                        <input id="select-3692" name="" value="<?php echo $GET["RESULTADO"];?>"
                            class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                            required="required">
                    </div>
                </div>
                <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-9">
                    <label for="date-89b8" class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Fecha
                        de Prueba</label>
                    <input type="text" placeholder="MM/DD/YYYY" id="date" name="fechap"
                        value="<?php echo $GET["FECHA_PRUEBA"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-10">
                    <label for="select-09e6"
                        class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Vacuna Aplicada</label>
                    <div class="u-form-select-wrapper">
                        <input id="select-09e6" name="" value="<?php echo $GET["TIPO_VACUNA"];?>"
                            class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                            required="required">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                            <path fill="currentColor" d="M4 8L0 4h8z"></path>
                        </svg>
                    </div>
                </div>
                <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-11">
                    <label for="name-cb67" class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Lugar
                        de Vacunaciòn</label>
                    <input type="text" placeholder="lugar" id="name-cb67" name="lugar"
                        value="<?php echo $GET["LUGAR_VACUNACION"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-12">
                    <label for="date-0ab5" class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Fecha
                        Primera Dosis</label>
                    <input type="text" placeholder="MM/DD/YYYY" id="date" name="FechaP"
                        value="<?php echo $GET["FECHA_PRIMERA_DOSIS"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-13">
                    <label for="date  " class="u-custom-font u-font-open-sans u-label u-text-palette-1-light-1">Fecha
                        Segunda Dosis</label>
                    <input type="text" placeholder="MM/DD/YYYY" id="date" name="FechaS"
                        value="<?php echo $GET["FECHA_SEGUNDA_DOSIS"];?>"
                        class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-text-palette-1-base"
                        required="">
                </div>
                </form>
            </div>
            <a href="Consultas.php" data-page-id="359922106"
                class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">CONSULTAR
                OTRO USUARIO</a>
            <a href="index.html" data-page-id="359922106"
                class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">REGRESAR</a>
            </form>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-c6e2">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Creado Por: <br> Diego Fernando Navarrete Acuña
                ID:420624&nbsp;<br>Manuel Andres Perez Pachon ID:130295 <br>
                Ingenieria Web I NRC 55284
            </p>
        </div>
    </footer>
    </form>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.3.5/web3.min.js"></script>
    <script type="text/javascript" src="src/utils.js"></script>
    <script type="text/javascript" src="src/index.js"></script>
</body>

</html>