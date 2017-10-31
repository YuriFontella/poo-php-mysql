<?php $registro = Query::editar(); ?>

<section class="carregar">
  <?php if (isset($_GET['status'])): ?>
    <div class="alert alert-danger">Não foi possível completar a operação!</div>
  <?php endif ?>

  <form method="post" action="produto.php?action=registro">
    <div class="form-group">
      <label>Nome:</label>
      <input class="form-control" type="text" name="nome" value="<?= $registro['nome'] ?>" autofocus>
    </div>

    <div class="form-group">
      <label>Descrição:</label>
      <input class="form-control" type="text" name="descricao" value="<?= $registro['descricao'] ?>">
    </div>

    <input type="hidden" name="id" value="<?= $registro['id'] ?>">

    <button class="btn btn-lg btn-primary" type="submit">Enviar</button>
  </form>
</section>