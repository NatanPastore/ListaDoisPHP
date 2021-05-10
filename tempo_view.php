<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tempo </title>

</head>

<body>

    <i>"A previsão do tempo diz que o céu fechoooou, o poder da vitória vai curar a dor" - Pabllo Vittar, Rajadão.</i>
    <br> <br>

    <b>DIGITE O NOME DE UMA CIDADE:</b>
    <form action="tempo.php" method="GET">
        <input type="text" name="cidade"> <br>
        <input type="submit">
    <br> <br>
    
    <b>Cidade: </b> <?= $nome ?> <br>
    <b>Temperatura: </b> <?= $temperatura ?> graus <br>
    <b>Sensação Térmica: </b> <?= $sensacao ?> graus <br>
    <b>Velocidade do Vento: </b> <?= $vento ?> km/h <br>
    <b>Umidade:</b> <?= $umidade ?>% <br> 

    <br> <hr> <br>

    <b> FOZ DO IGUAÇU </b> <br>
    <b>Temperatura: </b> <?= $temperaturaFoz ?> graus <br>
    <b>Sensação Térmica: </b> <?= $sensacaoFoz ?> graus <br>
    <b>Velocidade do Vento: </b> <?= $ventoFoz ?> km/h <br>
    <b>Umidade:</b> <?= $umidadeFoz ?>% <br> 

    <br> <br>

    <b> ARAQUARI </b> <br>
    <b>Temperatura: </b> <?= $temperaturaAra ?> graus <br>
    <b>Sensação Térmica: </b> <?= $sensacaoAra ?> graus <br>
    <b>Velocidade do Vento: </b> <?= $ventoAra ?> km/h <br>
    <b>Umidade:</b> <?= $umidadeAra ?>%

</body>

</html>