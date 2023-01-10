<?php
    Include 'artigo.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Copa do mundo</title>
    </head>
    <body>
        <h1>Copa do mundo</h1>
            <?php foreach ($artigos as $artigo) { ?>
                <h2><?php echo $artigo['titulo']; ?></h2>
                <p><?php echo $artigo['conteudo']; ?></p>
            <?php } ?>
    </body>
</html>