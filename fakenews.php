<?php
    
    $parteUm = [
        "a" =>"água com limão ", 
        "b" =>"Bacon ", 
        "c" =>"Cúrcuma ", 
        "d" =>"Doce de leite ",
        "e" =>"Azeite ",
        "f" =>"Frango ",
        "g" =>"Gengibre ",
        "h" =>"Adoçante ",
        "i" =>"Açucar ",
        "j" =>"Jiló ",
        "k" =>"Comida Japonesa ",
        "l" =>"Leite ",
        "m" =>"Macarrão ",
        "n" =>"Nata ",
        "o" =>"Ovo ",
        "p" =>"Pizza ",
        "q" =>"Óleo de coco ",
        "r" =>"Rabanada ",
        "s" =>"Suco detox ",
        "t" =>"Sal rosa ",
        "u" =>"Glutamina ",
        "v" =>"Caju ",
        "w" =>"Peixe ",
        "x" =>"Própolis ",
        "y" =>"Kumbucha ",
        "z" =>"Peixe "
    ];

    $parteDois = [
        "jan" => "ao acordar",
        "fev" => "pré-treino",
        "mar" => "amassado com limão",
        "abr" => "no cabelo",
        "mai" => "em Jejum",
        "jun" => "de 3 em 3 horas",
        "jul" => "no chá",
        "ago" => "no café",
        "set" => "depois das 18h00",
        "out" => "antes da aula",
        "nov" => "misturado na àgua",
        "dez" => "antes do almoço"
    ];
    
    $parteTres = [
        "1" => "diminiu o inchaço",
        "2" => "previne infarto",
        "3" => "cura TPM",
        "4" => "emagrece",
        "5" => "diminui vontade de doce",
        "6" => "mata",
        "7" => "limpa o fígado",
        "8" => "remove todas as toxinas",
        "9" => "previne diabetes",
        "10" => "cura dores de cabeça",
        "11" => "causa depressão",
        "12" => "vicia",
        "13" => "elimina barriga",
        "14" => "te deixa mais bonito(a)",
        "15" => "acaba com a celulite",
        "16" => "faz o cbelo crescer",
        "17" => "diminui o estresse",
        "18" => "melhora a TPM",
        "19" => "remove espinhas",
        "20" => "elimina ansiedade",
        "21" => "aumenta libido",
        "22" => "te deixa musculos@",
        "23" => "rejuvenesce",
        "24" => "dá barriga",
        "25" => "dá celulite",
        "26" => "elimina indisposição",
        "27" => "limpa as artérias",
        "28" => "diminiu o inchaço",
        "29" => "previne infarto",
        "30" => "cura TPM",
        "31" => "emagrece"
    ];

    $mentirinha = " ";

    if (isset($_GET['letra']) && isset($_GET['mes']) && isset($_GET['dia'])) {
    
        $letraparteUm = $_GET['letra'];
        $mesparteDois = $_GET['mes'];
        $diaparteTres = $_GET['dia'];
        $mentirinha = "{$parteUm[$letraparteUm]} {$parteDois[$mesparteDois]} {$parteTres[$diaparteTres]}";
    }

    require "fakenews_view.php";