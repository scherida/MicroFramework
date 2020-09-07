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
        <p>NOTA 01: 
            <input type="text" name="nota1"/>
        </p>
        <p>NOTA 02: 
            <input type="text" name="nota2"/>   
        </p>
        <p>NOTA 03: 
            <input type="text" name="nota3"/>
        </p>
        <p>NOTA 04: 
            <input type="text" name="nota4"/>
        </p>
        <p><input type="submit" value="<?php echo $acao ?>" />
    </form>
</body>
</html>