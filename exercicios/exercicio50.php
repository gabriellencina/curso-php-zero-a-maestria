<?php

$pessoas = ['Gabriel' => 21, 'Lencina' => 22, 'Pereira' => 23];

?>

<table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach($pessoas as $nome => $idade): ?>
                <tr>
                   <td><?= $nome; ?></td>
                   <td><?= $idade;?></td>
                </tr>
        <?php endforeach; ?>
</table>