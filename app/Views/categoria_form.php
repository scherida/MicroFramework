<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h2><?php echo $titulo;?></h2>
    <p><a href="<?php echo base_url('categorias');?>">Voltar para lista de Categorias</a></p>
    <strong><?php echo $msg; ?></strong>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo (isset($categoria) ? $categoria->id : '')?>"/>
        <p>Nome da Categoria: 
            <input type="text" name="nomecategoria" 
                value="<?php echo (isset($categoria) ? $categoria->nomecategoria : '')?>"
            />
        </p>
        <p><input type="submit" value="<?php echo $acao;?>" />
    </form>
</body>
</html>