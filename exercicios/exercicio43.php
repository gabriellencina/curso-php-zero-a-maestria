<?php

$string = "carro-navio-helicóptero-barco-jangada";

$stringToArray = explode("-", $string);

for($i = 0; $i < count($stringToArray); $i++){

    echo "Item: $stringToArray[$i] <br>";

}
