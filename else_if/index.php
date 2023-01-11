<?php

// Com o else if podemos criar um novo bloco de expressão

// Este bloco será executado caso o primeiro if seja falso


if(10 > 5){
    
    echo "Entrou no primeiro if <br>";

} elseif(10 > 6) {
 
        echo "Entro no segundo if <br>";

}


if(10 < 5){
    
    echo "Entrou no primeiro if <br>";

} elseif(10 > 6) {
 
        echo "Entro no segundo if 2 <br>";
        
}


if(10 < 5){
    
    echo "Entrou no primeiro if <br>";

} elseif(10 < 6) {
 
        echo "Entro no segundo if 2 <br>";
        
} else {

    echo "Entrou no else, pois os 2 if são falsos";

}
