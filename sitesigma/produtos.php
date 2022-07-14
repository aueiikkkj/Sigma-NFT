<?php
// include do footer
include_once './includes/_banco.php';

include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1>Produtos</h1>


<div class="row mt-5">
        
        <?php
        foreach ($produtos as $key => $value) {
            
          
            
        
        
        ?>
        <div class="card m-3" style="width: 18rem;">
    <img class="card-img-top" src="./content/<?php echo $produtos[$key]['imagem'];?>" alt="Imagem de capa do card" >
    <div class="card-body">
        <h5 class="card-title"><?php echo $produtos[$key]['nome'];?></h5>
        <h7 class="card-text"> Preço: <?php echo $produtos[$key]['preco']?></h7>
        <p class="card-text"> Descrição: <?php echo $produtos[$key]['descricao'];?></p>
        <a href="produto-detalhe.php?id=<?php echo $key;?>&tipo=promocao" class="btn btn-primary">Visitar</a>
        </div>
    </div>
            <?php
        }
            ?>
    </div>

<?php
// include do footer
include_once './includes/_footer.php';
?>