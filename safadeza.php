<?php

    $diaParametro = 0;
    $mesParametro = 0;
    $anoParametro = 0 ;
    
    if (isset($_GET['mes']) && isset($_GET['dia']) && isset($_GET['ano'])) {
        $diaParametro = $_GET['dia'];
        $mesParametro = $_GET['mes'];
        $anoParametro = $_GET['ano'];
    }
    
    function somatorio($mesParametro){
        $resultadoSom = 0;

        for($mesParametro; $mesParametro >= 1; $mesParametro--){
            $resultadoSom = $resultadoSom + $mesParametro;
        }

        return $resultadoSom;
    }

    function safadeza($diaParametro, $mesParametro, $anoParametro){

        $qntoSafado = somatorio($mesParametro) + ($anoParametro / 100) * (50 - $diaParametro);
        $qntoAnjo = 100 - $qntoSafado;

        $SafadoAnjo = [$qntoSafado, $qntoAnjo];

        return $SafadoAnjo;
    }

    $resultado = safadeza($diaParametro, $mesParametro, $anoParametro);

    require "safadeza_view.php";