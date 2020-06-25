<?php
$arreglo = [20,11,11,15,15,60,65,7,7,7];

if(count($arreglo) > count(array_unique($arreglo))){
  echo "¡Hay repetidos!";
}else{
  echo "No hay repetidos";
}
?>