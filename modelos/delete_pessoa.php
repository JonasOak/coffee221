<?php
//autor:Ana Clara
//arquivo com conexão com o BD
$title = "delete pessoa";
include '../include/header.php';
include '../include/database.php';
$id = $_GET['var'];

if (isset($_GET['delete']) and $_GET['delete'] == 1) {
  $consulta = "DELETE from pessoa WHERE id_pessoa={$id}";
  $query = mysqli_query($con, $consulta);
  header('Location:relatorio_pessoa.php');
}

?>


<body>
  <div class="container">
    <div class="row">
      <h3 class="text-center">Deleção de pessoa</h3>
      <div class="col-10">
        <h2 class="text-center">Tem Definitiva Absoluta Certeza que deseja deletar?</h2>
        <a href="relatorio_pessoa.php" class="btn btn-secondary">voltar</a>
        <a href="delete_pessoa.php?delete=1&var=<?= $id ?>" class="btn btn-danger">Deletar</a>
      </div>
    </div>
  </div>

  <?php
  include '../include/footer.php';
  ?>