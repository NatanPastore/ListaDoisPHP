<?php
const URL = "https://pokeapi.co/api/v2/pokemon/";

$pokedex = [];

for ($i = 1; $i <= 15; $i++) { 
    $id = $i;
    $url = URL.$id;

    $consulta = file_get_contents($url);

    $vetor = json_decode($consulta, true);

    $pokedex[$i]['nome'] = $vetor['name'];
    $pokedex[$i]['peso'] = $vetor['weight'];
    $pokedex[$i]['altura'] = $vetor['height'];
    $pokedex[$i]['habilidades'] = $vetor['abilities'];
    $pokedex[$i]['imagem'] = $vetor['sprites']['other']['dream_world']['front_default'];
};

include 'pokedex_view.php';