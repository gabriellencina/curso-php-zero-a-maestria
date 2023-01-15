<?php

function soma($a , $b)
{
    // quais argumentos foram
    print_r(func_get_args());

    echo "<br>";
    
    // numero de argumentos passados
    echo func_num_args() . "<br>";

    return $a + $b;
}

soma(2,2);