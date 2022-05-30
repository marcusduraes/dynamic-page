<?php require 'header.php'; ?>
<?php require 'cardapio.php';?>

    <h1 class="title">Cardápio</h1>
    <div class="flex-ctn">

      <?php
        foreach($cardapio as $item){?>
          <a href="classicos.php?p=<?php echo $item['nome'];?>&c=<?php echo $item['caloria'];?>&desc=<?php echo $item['descricao'];?>&g=<?php echo $item['gordura-total'];?>&carb=<?php echo $item['carboidratos'];?>&protein=<?php echo $item['proteinas'];?>&codigo=<?php echo $item['codigo'];?>" class="detail__item">
            <div class="ctn">
              <img src="content/images/<?php echo $item['codigo'];?>.jpg" alt="<?php echo $item['codigo'];?>">
              <p><?php echo $item['nome'];?></p>
            </div>
          </a>
        <?php }?>
    </div>
  </body>
</html>