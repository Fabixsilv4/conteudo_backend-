<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabeçalho.php";
?>

<div class="container">
  
    <h1>Cadastro de Animais</h1>
    <hr>
    <form action="<?php echo isset($animal) ? "atualizar.php" : "inserir.php"; ?>" method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="idanimal" id="idanimal" value="<?php echo $animal->idanimal ?? "" ;?>"><br>  

        <label class="form-label">Nome do dono</label><br>
        <input class="form-control" type="text" name="nome_dono" id="nome_dono" value="<?php echo $animal->nome_dono ?? "" ;?>"><br>

        <label class="form-label">Nome do animal</label><br>
        <input class="form-control" type="text" name="nome_animal" id="nome_animal" value="<?php echo $animal->nome_animal ?? "" ;?>"><br>

        <label class="form-label">Raça</label><br>
        <input class="form-control" type="text" name="raca" id="raca" value="<?php echo $animal->raca ?? "" ;?>"><br>

        <label class="form-label">Peso</label><br>
        <input class="form-control" type="text" name="peso" id="peso" value="<?php echo $animal->peso ?? "" ;?>"><br>

        <label class="form-label">Idade</label><br>
        <input class="form-control" type="text" name="idade" id="idade" value="<?php echo $animal->idade ?? "" ;?>"><br>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>

    <?php require_once "../template/rodape.php"; ?>animal