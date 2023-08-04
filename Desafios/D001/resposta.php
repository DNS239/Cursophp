<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Resultado final</h1>
     <p>

        <?php

            $n = $_REQUEST["num"]?? 0;
            $a = $n - 1;
            $s = $n + 1;
            echo "O numero escolhido foi $n";
            echo "<br>O seu sucessor é $a";
            echo "<br>O seu antecessor é $s";
      
        ?>

     </p>
     <button onclick="history.go(-1)">&#x2b05; Voltar</button>

 </main>
    
</body>
</html>