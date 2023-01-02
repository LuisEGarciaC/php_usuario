<?php
    require_once("../../view/head/header.php");
?>

  <form action="store.php" method="POST" autocomplete="off">
  <div class="mb-3">
      <label for="username" class="form-label">Nombre del usuario</label>
      <input type="text" name="nombre" required class="form-control" id="username" aria-describedby="username">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-danger" href="index.php">Cancelar</a>
  </form>

<?php
    require_once("../../view/head/footer.php");
?>