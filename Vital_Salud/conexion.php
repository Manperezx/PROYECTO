<?php

try{
    $conex = mysqli_connect('localhost','id20993399_root','LuiNava1594_','id20993399_pasaporte_covid');

  } catch (Exception $e) {
    echo 'ERROR:'.$e->getMessage();
  }
?>