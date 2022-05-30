<?php
    require 'header.php';
    require 'cardapio.php';
    if(isset($_GET)){
        $nome_prato = $_GET['p'];
        $caloria_prato = $_GET['c'];
        $descricao_prato = $_GET['desc'];
        $gordura_prato = $_GET['g'];
        $carboidrato_prato = $_GET['carb'];
        $proteina_prato = $_GET['protein'];
        $codigo_prato = $_GET['codigo'];
    }
?>
    <div class="main-ctn">
        <div class="flex-ctn">
            <div class="img-ctn">
                <img src="content/images/<?php echo $codigo_prato;?>.jpg" alt="<?php echo $codigo_prato;?>">
            </div>
            <div class="info-ctn">
                <h1 class="title-p"><?php echo $nome_prato;?></h1>
                <h3><?php echo $caloria_prato . ' kcal';?></h3>
                <p><?php echo $descricao_prato;?></p>
            </div>
        </div>
    </div>
    <h2 class="title-2">Informação Adicional:</h2>
    <div class="add-info">
        <div class="card">
            <h3><?php echo $caloria_prato . 'kcal';?></h3>
            <p class="no-margin">Calorias</p>
        </div>
        <div class="card">
            <h3><?php echo $gordura_prato . 'g';?></h3>
            <p class="no-margin">Gordura total</p>
        </div>
        <div class="card">
            <h3><?php echo $carboidrato_prato . 'g';?></h3>
            <p class="no-margin">Carboidratos</p>
        </div>
        <div class="card">
            <h3><?php echo $proteina_prato . 'g';?></h3>
            <p class="no-margin">Proteínas</p>
        </div>
    </div>
  </body>
</html>
