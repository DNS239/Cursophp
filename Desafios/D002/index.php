<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros.</h1>
        <?php 
        $min = 600;
        $max = 1000000;
        $num = random_int($min, $max);
        echo "<p>Gerando um numero aleatorio entre $min e $max...</p> <br>
         O valor gerado foi <strong>$num</strong>...";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar outro.</button>
    </main>
</body>
</html>