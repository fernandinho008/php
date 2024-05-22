<?php 
$texto =  "<p> eset é o quarto paragrafo</p>"; // variável php
?>

<html>
    <head>
        <title> Exercício 4 de Php</title>
    </head>
    <body>
        <h1>Exercício 4 de PHP  -Misturando códigos</h1>
        <p>Este é o primeiro parágrafo</p>
        <p><?php echo "esse é o segundo parágrafo"; ?></p>
        <p>esse é o terceiro parágrafo</p>
        <?php echo $texto ?>
    </body>
</html>