 <?php

 $frase = "O rato roeu a roupa do rei de Roma";

 $conta_a = 0;

 for ($i = 0; $i < strlen($frase); $i++){

    if($frase[$i] === 'a' ){

        $conta_a++;
        
    }
 }

 echo "O total de A's na frase é de: $conta_a";