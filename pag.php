<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Farsan&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    $nnome=$_POST["nome"];
    $ssenha=$_POST["senha"];
        if ($nnome=="hugo" && $ssenha==123)
            {echo "Bem vindo Hugo!";}
            else
            {echo "Login errado";}
        
    ?>
    
</body>
</html>