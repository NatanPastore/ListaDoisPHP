<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> POKEDEX </title>
</head>

<style>
    .card{
        width: 200px;
        height: 330px;
        border: ridge 1px;
        position: relative;
        float: left;
        padding: 10px;
    }

    .card img{
        text-align: center;
        max-width: 80%;
    }
</style>

<body>

    <h2>POKEDEX: conheça seus pokemóns, treinador!</h2>
    
    <?php foreach ($pokedex as $poke) : ?>

    <div class="card">

        <img src="<?=$poke['imagem'] ?>"> <br> 
        <b>NOME:</b> <?=$poke['nome'] ?> <br>
        <b>ALTURA:</b> <?=$poke['altura'] ?> cm <br>
        <b>PESO:</b> <?=$poke['peso'] ?> gr <br>
        
        <b>HABILIDADES:</b>
        <ul>
        <?php foreach ($poke['habilidades'] as $hab) : ?>
            <li> <?=$hab['ability']['name'] ?> </li>
        <?php endforeach; ?>
        </ul>

    </div>

    <?php endforeach; ?>

</body>
</html>