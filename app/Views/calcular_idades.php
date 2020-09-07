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
        <p>Escreva sua idade (somente em anos): 
            <input type="text" name="anos"/>
        </p>
        <p>Escreva sua idade (somente em meses) : 
            <input type="text" name="meses"/>   
        </p>
        <p>Escreva (sua idade somente em dias): 
            <input type="text" name="dias"/>
        </p>
        <p><input type="submit" value="<?php echo $acao ?>" />
    </form>
</body>
</html>