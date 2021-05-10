<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gerador de MENTIRINHAS </title>

</head>

<body>

    <b> GERADOR DE MENTIRINHAS </b>
    <br>
    <br>
    
    <form method="GET" action="fakenews.php">

        <label> <b> PRIMEIRA LETRA DO SEU NOME (minúscula): </b> </label> <br>
        <input type="text" name="letra"> <br>
        <label> <b> 3 PRIMEIRAS LETRAS DO MÊS DO SEU ANIVERSÁRIO: </b> </label> <br>
        <input type="text" name="mes"> <br>
        <label> <b> DIA DO SEU ANIVERSÁRIO: </b> </label> <br>
        <input type="text" name="dia"> <br>
        <input type="submit"> <br>
    </form>

    <br>
    <b> SUA MENTIRINHA É: </b> 
    <?= $mentirinha ?>

</body>
</html>