<?php

const ID = 'yTwnq1sgoBMWU1MM7KFxK';
const SECRET = 'IWZkcWU77HvZqXAL0chmKzsoXwsahhwvl6n2IaL2';

const BASE_URL = "https://api.aerisapi.com/conditions/";

$cidade = " ";
$nome = "";
$temperatura = 0;
$sensacao = 0;
$umidade = 0;
$vento = 0;

if(isset($_GET['cidade'])){

    $cidade = $_GET['cidade'];
    $cidade = urlencode($cidade);
    $url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;

    $json  = file_get_contents($url);
    $dados = json_decode($json, true);

    $nome = $dados['response'][0]['place']['name'];
    $temperatura = $dados['response'][0]['periods'][0]['tempC'];
    $sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
    $umidade = $dados['response'][0]['periods'][0]['humidity'];
    $vento = $dados['response'][0]['periods'][0]['windSpeedKPH'];

}

//--------------------------------------

$araquari = urlencode('araquari');

$urlAra = BASE_URL . "{$araquari},br?client_id=" . ID . "&client_secret=" . SECRET;

$jsonAra  = file_get_contents($urlAra);
$dadosAra = json_decode($jsonAra, true);

$temperaturaAra = $dadosAra['response'][0]['periods'][0]['tempC'];
$sensacaoAra = $dadosAra['response'][0]['periods'][0]['feelslikeC'];
$umidadeAra = $dadosAra['response'][0]['periods'][0]['humidity'];
$ventoAra = $dadosAra['response'][0]['periods'][0]['windSpeedKPH'];

//----------------------------------------

$foz = urlencode('foz do iguaçu');

$urlFoz = BASE_URL . "{$foz},br?client_id=" . ID . "&client_secret=" . SECRET;

$jsonFoz  = file_get_contents($urlFoz);
$dadosFoz = json_decode($jsonFoz, true);

$temperaturaFoz = $dadosFoz['response'][0]['periods'][0]['tempC'];
$sensacaoFoz = $dadosFoz['response'][0]['periods'][0]['feelslikeC'];
$umidadeFoz = $dadosFoz['response'][0]['periods'][0]['humidity'];
$ventoFoz = $dadosFoz['response'][0]['periods'][0]['windSpeedKPH'];


require "tempo_view.php";






