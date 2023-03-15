<?php

$dados = [
            "nome" => "Gabriel",    "idade" => 21,
            "nome" => "Felipe",     "idade" => 25,
            "nome" => "João",       "idade" => 30,
            "nome" => "Mylena",     "idade" => 41
         ];

echo "<table>";
echo "<tr>
        <th>Nome</th>
        <th>Idade</th>
     </tr>";

foreach($dados as $pessoa){
        
        echo "<tr>";
        echo "<td>".$pessoa['nome']."</td>";
        echo "<td>".$pessoa['idade']."</td>";
        echo "</tr>";

}

echo "</table>";

