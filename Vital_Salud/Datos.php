<?php  include ("conexion.php ");

if ($_SERVER['REQUEST_METHOD']  == 'POST') {

  if (strlen($_POST['Tipod']) >= 1 &&  
        strlen($_POST['numero']) >= 1 &&
        strlen($_POST['nombreapellido']) >= 1 &&
        strlen($_POST['ciudad']) >= 1 &&
        strlen($_POST['regimen']) >= 1 &&
        strlen($_POST['eps']) >= 1 &&
        strlen($_POST['centroa']) >= 1 &&
        strlen($_POST['fechap']) >= 1 &&
        strlen($_POST['resultado']) >= 1 &&
        strlen($_POST['tipov']) >= 1 &&
        strlen($_POST['lugar']) >= 1 &&
        strlen($_POST['FechaP']) >= 1 &&
        strlen($_POST['FechaS']) >= 1) {

    $TipoD = htmlentities($_POST['Tipod']);
    $numero = htmlentities($_POST['numero']);
    $nombreapellido = htmlentities($_POST['nombreapellido']);
    $ciudad = htmlentities($_POST['ciudad']);
    $regimen = htmlentities($_POST['regimen']);
    $eps = htmlentities($_POST['eps']);
    $centroa = htmlentities($_POST['centroa']);
    $fechap = htmlentities($_POST['fechap']);
    $resultado = htmlentities($_POST['resultado']);
    $tipov = htmlentities($_POST['tipov']);
    $lugar = htmlentities($_POST['lugar']);
    $FechaP = htmlentities($_POST['FechaP']);
    $FechaS = htmlentities($_POST['FechaS']);
          
    $consulta = "SELECT (TIPO_DOCUMENTO, NUMERO_DOCUMENTO, NOMBE_APELLIDO, CIUDAD, REGIMEN, EPS, CENTRO_ATENCION, FECHA_PRUEBA, RESULTADO, TIPO_VACUNA, LUGAR_VACUNACION, FECHA_PRIMERA_DOSIS, FECHA_SEGUNDA_DOSIS) FROM registro";
    
                try{
              $ejecutar = mysqli_query ($conex,$consulta);
              echo "Datos Agregados...";
            } catch (Exception $e) {
              echo 'ERROR:'.$e->getMessage();
            } 
     } else {    
      echo 'Error en los datos';
   }
}
?>