<pre>
<?php 
//$inicio = date("-7 days");
//$fim =date("m-d-y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'06-23-2023\'&@dataFinalCotacao=\'06-30-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

//var_dump($dados);

$cotação = $dados["value"][0]["cotacaoCompra"];

echo "A cotação é $cotação";

?>
</pre>