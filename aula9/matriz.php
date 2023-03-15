<h2>Matriz</h2>
<p>
    São estruturas de dados bidimensional, onde é necessário informar 2 indices para realizar o acessode um valor.
</p>
<p>
    na prática consiste de um vetor que armazena outros vetores.
</p>

<?php
    $produto1 = ["nome" => "Cãmera",
                "marca" => "LG",
                "preco" => 2500];
    
     $produto2 = ["nome" => "notebook",
                "marca" => "dell",
                "preco" => 7500];

    $produto3 = ["nome" => "smartphone",
                "marca" => "Sansung",
                "preco" => 3500];
            
$produtos = [$produto1, $produto2, $produto3];

//imprimir todos os valroes da matriz, utilizando duas estruturas de repetição, 1 para as linhas outra para as colunas

for($i=0; $i <=2; $i++){
foreach($produtos[$i] as $key => $value){
    echo $value . "<br>";
}
}

echo "<table border=1>";
//outra forma
foreach($produtos as $produto ){
    echo "<tr>";
    echo "<td>" .  $produto["nome"] . "</td>";
    echo "<td>" .  $produto["marca"] . "</td>";
    echo "<td>" . $produto["preco"] . "</td>";
    echo "</tr>";
}
echo "</table>"

?>