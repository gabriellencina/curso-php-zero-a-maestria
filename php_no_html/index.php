<?php
    
    include_once "backend.php";

?>

<h1>Seja bem vindo a nosso site</h1>
<p><?= $nome; ?> Veja as nossas ofertas</p>

<h2>Confira os nossos principais produtos:</h2>

<ul>
    <?php foreach($produtos as $produto): ?>
        <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>