<?<php
     include "header.php";
     include "dados,php";

     //conteudo de um array
     //echo "<pre>";
     //print_r( $series );
     //echo "</pre>";
?>
<main> 
    <h1>Series em destaque:</h1>
    <div class="grid">
        <?php
            foreach ( $series as $serie ) {
                $id = $serie["id"];
                $nome = $serie["nome"];
                $imagem = $serie["imagem"];

                echo "<div class= 'coluna'>;
                    <img src= 'imagens/{$imagem}'>
                    <p><strong>{$home}</strong></p>
                    <p>
                       <a> href='serie.php/?
                </div>";
            }

        ?>
    </div>
</main>
<?php include