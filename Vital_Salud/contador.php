<?php
    // Ruta al archivo de almacenamiento del contador
    $archivoContador = "contador.txt";

    // Comprueba si el archivo de contador existe
    if (file_exists($archivoContador)) {
        // Lee el valor actual del contador
        $contador = file_get_contents($archivoContador);
        // Incrementa el contador en 1
        $contador++;
    } else {
        // Si el archivo no existe, crea uno nuevo y establece el contador en 1
        $contador = 1;
    }

    // Guarda el nuevo valor del contador en el archivo
    file_put_contents($archivoContador, $contador);

    // Muestra el contador en la página
    echo "Visitas: " . $contador;
?>