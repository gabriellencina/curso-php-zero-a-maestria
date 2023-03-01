 <?php

 /* 
    array de um array, em tese seria uma matriz
    
    Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 2 [1] => 4 [2] => 6 ) )

    saída do echo da variável $arr, aonde se encontra para o primeiro array [0] e seus índices [0], [1] e [2]
    o segundo array tem como valor [1] e seus índices [0], [1] e [2].
 */

 $arr = [
            [1, 2, 3],
            [2, 4, 6]
        ];

print_r($arr);
echo '<br>';

echo $arr[0][1] . "<br>"; // acessando o primeiro array e seu segundo elemento.

echo $arr [1][2] . "<br>"; // acessando o segundo array e último elemento.

echo count($arr) . "<br>"; // mostra o número de arrays que tenho.

echo count($arr[0]) . "<br>"; 