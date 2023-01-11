<?php

$velocidade = 80;

if($velocidade < 40){

    echo "$velocidade km/h, motorista está na velocidade correta <br>";

} else if ($velocidade == 40){

    echo "$velocidade km/h, motorista tome cuidado <br>";

} else if ($velocidade > 40){

    echo "$velocidade km/h, motorista multado";

}