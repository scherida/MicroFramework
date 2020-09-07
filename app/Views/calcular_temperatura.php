<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <strong><?php echo $msg; ?></strong>
    <form method="post">
        <p>Escreva uma temperatura em graus Celsius: 
            <input type="text" name="graus"/>
        </p>
        <p><input type="submit" value="<?php echo $acao ?>" />
    </form>
</body>
</html>