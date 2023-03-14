<h2>Vetor indexado por texto</h2>
<p>
    Os vetores podem usar textos para indexar (indentificar) os valores armazenados.
    exemplo:
   <pre>
            +--------------+
    Nome    |Fabíola       |
            +--------------+
    Nota1   |9             |
            +--------------+
    Nota2   |7             |
            +--------------+
</pre>
</p>

<?php

$alunos = [
    "nome" => "fabiola",
    "nota1" => 9,
    "nota2" => 7
];


$alunos["notatotal"] = $alunos["nota1"] + $alunos["nota2"];
var_dump($alunos);

echo "<p>&nbsp;</p><pre>";
//imprimir todos o valores de um vetor
//utilizando o foreach
foreach($alunos as $key => $values) {
    echo "      +-----------+\n";
    echo "$key  |$values      |\n";
}
?>
</pre>

