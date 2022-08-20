<?php
    include "header.php";
    include "dados.php";


    $id = $_GET["id"] ?? NULL;
    //verificar se o id esta branco
    if ( empty ($id) ) {
       echo "<script>alert('Serie nao encontrada');
       history.back();</scrip";
       exit;

  }

  $nome = $series[$id]["nome"];
  $imagem = $series[$id]["imagem"];
  $sinopse = $series[$id]["sinopse"];
?>
<main> 
    <div class="grid-2"> 
        <div class="coluna"> 
            <img src="imagens/<?=$imagem?>">
        </div>
    </div>
</main>
<?php include "foother.php"; ?>