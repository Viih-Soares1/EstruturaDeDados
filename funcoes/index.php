<?php 

// FUNÇÃO MUDA DATA PARA BR
function DataFormatoBR($value){
    $arrayData = explode('-', $value);
    return $arrayData[2] . '/' . $arrayData[1] . '/' . $arrayData[0];
}

// FUNÇAÕ MUDA DATA PARA INGLES
function DataFormatoING($value){
    $arrayData = explode('/', $value);
    return $arrayData[0]. '-' . $arrayData[1] . '-' . $arrayData[2];
}

//DIAS DA SEMANA
function dia_da_semana($dianumero){
    $dia = [
        'SEGUNDA',
        'TERÇA',
        'QUARTA',
        'QUINTA',
        'SEXTA',
        'SÁBADO',
        'DOMINGO'
    ];
    return ($dia[$dianumero -1]);
    
}

// MESES DO ANO
function meses_do_ano($mesnumero){
    $mes = [
        'JANEIRO',
        'FEVEREIRO',
        'MARÇO',
        'ABRIL',
        'MAIO',
        'JUNHO',
        'JULHO',
        'AGOSTO',
        'SETEMBRO',
        'OUTUBRO',
        'NOVEMBRO',
        'DEZEMBRO'
    ];
    return ($mes[$mesnumero -1]);
}