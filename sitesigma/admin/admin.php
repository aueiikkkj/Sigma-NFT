<!-- LISTAR OS PRODUTOS E COLOCAR OS BOTOES PARA EDITAR E DELETAR -->

<?php
require "../includes/_head.php";
require "../includes/_banco.php";
$sql = "SELECT * FROM produtos WHERE Ativo = 1";
$res = mysqli_query($conn, $sql)

?>  

<div class="container mt-5">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Descrição </th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($res as $produto) :
    ?>
    <tr>
      <th scope="row"><?= $produto['ProdutoID']?></th>
      <td><?= $produto['Nome']?></td>
      <td><?= $produto['Preco']?></td>
      <td><?= $produto['Descricao']?></td>
      <td> <span><a href="#" class="btn btn-primary">Editar</a></span> <span><a href="#" class="btn btn-danger">Excluir</a></span> </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>






 
