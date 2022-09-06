<!--  FORMULARIO DE CRIAÇÃO DE PRODUTOS E SALVAMENTO DO PRODUTO -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
<div class="container">
<form method="post" action="create.php">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Enter email">
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="email">Descrição</label>
    <input type="text" class="form-control" name="descricao" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="email">Imagem</label>
    <input type="text" class="form-control" name="imagem" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="email">Preço</label>
    <input type="text" class="form-control" name="preco" placeholder="Enter email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>