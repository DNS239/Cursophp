<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de moeda.</h1>
    <?php 
    //Cotaçao vinda da api do banco central.
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'06-23-2023\'&@dataFinalCotacao=\'06-30-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url), true);
    $cotação = $dados["value"][0]["cotacaoCompra"];


    //Quantoos $$ voce tem.
    $real = $_REQUEST["din"] ?? 0;
    //Equivalencia em dollar.
    $dollar = $real / $cotação;
    //Mostrar o resultado.
    
    //echo "Seus R\$" . number_format($real, 2,",", ".") . "equivale a US\$" . number_format($dollar, 2,",", ".");

    // padao internacional.

    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

    echo "<p>Seus" . numfmt_format_currency($padrao, $real, "BRL") . "equivalen a " . numfmt_format_currency($padrao, $dollar, "USD") . "</p>";
    ?>
    <button onclick="javascript:history.go(-1)">VOLTAR</button>
    </main>
</body>
</html>