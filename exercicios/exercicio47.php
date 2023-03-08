<?php

$carro = ['jaguar', 3.0, 'azul', 18, 'Teto solar', 'Automatico'];

print_r($carro);
echo "<br>";


list($marca, $potencia, $cor, $roda, $detalhes, $cambio) = $carro;

echo "$marca <br>";
echo "$potencia <br>";
echo "$cor <br>";
echo "$roda <br>";
echo "$detalhes <br>";
echo "$cambio <br>";