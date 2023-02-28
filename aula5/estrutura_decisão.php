<h2> Estrutura de decisão </h2>
<p>
    As estrutura de condição permitem executar blocos distintos de código dado uma condição.

    <strong>Exemplo</strong>
    <pre>
        if(condição){
            //instruções executadas
            //caso a condição seja verdadeira
        }else{
            //instruções executadas, caso 
            //a condiçaõo seja falsa.
        }
    </pre>
    </p>
    <?php
        $media=7;

        if($media >=6){
            echo "o aluno foi aprovado";
        }else{
            echo "o aluno foi reprovado";
        }
        ?>
<br>
media > >=6 | aprovado
6 < media >  >=3 | exame 
media < 3  | reprovado 
<br>

        <?php
        $media=4;

        if($media >=6){
            echo "o aluno foi aprovado";
        }else if($media >=3){
            echo "o aluno foi recuperado";
        }else{
            echo "o aluno foi reprovado";

        }
        ?>

<P>
        o PHP faz a conversão automaticamente de alguns tipos para verdadeiro ou falso.

        <strong>True</strong>
        <ul>
            <li>String com texto</Li>
            <li>Número igual a 0</Li>
            <li>Vetor vazio</Li>
        </ul>
</p>

<?php
    if("o loco meu!"){
        echo "Verdadeiro <br>";
    }else{
        echo "Falso";
    }

?>

<?php
    $media = 4;
    if($media >=6 && "quero passar de ano"){
        echo"huhuhu, sou esperto";
    }else{
        echo "ihh, me dei mal";
    }