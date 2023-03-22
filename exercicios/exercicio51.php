<?php

$arr =  [
            'Gabriel' => 10 ,
            'Fulano' => 5,
            'Ciclano' => 7.5
        ];

arsort($arr);
?>
<h1>RANKING: </h1>
<table border="1">        
<tr>
            <th>Nome</th>
            <th>Pontos</th>
        </tr>
        <?php foreach($arr as $nome => $pontos): ?>
                <tr>
                   <td><?= $nome; ?></td>
                   <td><?= $pontos;?></td>
                </tr>
        <?php endforeach; ?>
</table>