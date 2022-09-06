<?php
// include do footer
include_once './includes/_banco.php';

include_once './includes/_head.php';
include_once './includes/_header.php';

?>

<div class="container">
<h2>Promoção</h2>   
    <div class="row mt-5">
        
        <?php
        //cria uma variável que contem SQL executado
        $sql = "SELECT * FROM categorias WHERE Ativo = 1";
        //executa o comando SQL
        $exec = mysqli_query ($conn,$sql);
        $numProdutos = mysqli_num_rows ($exec);

        while ($dados = mysqli_fetch_assoc($exec) ) {
            echo '<h1>'.$dados['Nome'].'</h1>';
        }

        for ($i=0; $i < 3; $i++){
        
        ?>
        <div class="card m-3" style="width: 18rem;">
    <img class="card-img-top" src="./content/<?php echo $produtos[$i]['imagem'];?>" alt="Imagem de capa do card" height=250  >
    <div class="card-body">
        <h5 class="card-title"><?php echo $produtos[$i]['Nome'];?></h5>
        <h7 class="card-text"> Preço: <?php echo $produtos[$i]['preco']?></h7>
        <p class="card-text"> Descrição: <?php echo $produtos[$i]['descricao'];?></p>
        <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Visitar</a>
        </div>
    </div>
            <?php
        }
            ?>
    </div>


</div>

