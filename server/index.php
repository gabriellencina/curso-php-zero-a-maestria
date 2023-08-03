<?php

print_r($_SERVER);

if($_SERVER['HTTP_HOST'] == 'localhost'){
    echo "<br> Estamos no ambiente local";
}