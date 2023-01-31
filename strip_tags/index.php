<?php

$textoHTML = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro paragráfo</p>";

echo $textoHTML;

$salvarTextoBanco = strip_tags($textoHTML);

echo $salvarTextoBanco;