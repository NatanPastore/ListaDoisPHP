<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SAFADEZA </title>

</head>

<body>

    <h3>PREENCHA AS INFORMAÇÕES ABAIXO APENAS UTILIZANDO NÚMEROS, QUE A GENTE TE CONTA QUÃO SAFADÃO VOCÊ É!</h3>
    
    <form action="safadeza.php" method="get">

        <b> DIA DO SEU NASCIMENTO </b> <br>
        <input type="number" name="dia"> <br>

        <b> MÊS DO SEU NASCIMENTO </b> <br>
        <input type="number" name="mes"> <br>

        <b> ANO DO SEU NASCIMENTO (últimos 2 dígitos) </b> <br>
        <input type="number" name="ano"> <br>

        <input type="submit"> <br> <br> 

    </form>

    <b> CONCLUSÃO: </b> <br>
    <i> Parece que você é <?= $resultado[0]; ?>% safadão e <?= $resultado[1]; ?>% anjo! Aí pai, para! </i>


</body>

</html>