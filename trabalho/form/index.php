    <?php 
     require "consultar_todos.php";
     require_once "../template/cabeçalho.php";
     ?>

    <div class="container">

    <h1>Animais</h1>
    <hr>
    
    <div class="text-end">
    <a href="formulario.php" class="btn btn-success" >Inserir Novo</a>
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Nome do dono</th>
      <th scope="col">nome do animal</th>
      <th scope="col">raca</th>
      <th scope="col">peso</th>
      <th scope="col">idade</th>
      <th scope='col'>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($animais as $animal): ?>
    <tr>
      <td><?php echo $animal->nome_dono ?></td>
      <td><?php echo $animal->nome_animal ?></td>
      <td><?php echo $animal->raca ?></td>
      <td><?php echo $animal->peso ?></td>
      <td><?php echo $animal->idade?></td>
      <td class="text-end" width="25%">
        <a href="excluir.php?id=<?= $animal->idanimal?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Excluir</a>
        <a href="formulario.php?id=<?= $animal->idanimal?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<?php require_once "../template/rodape.php"; ?>