<?php 

$programadores = [];
$totalexp = 0;
$maior30 = 0;
$menor30 = 0;
$totalf = 0;
$totalm= 0;
$programador =[
    "NOME" => "Vinicius",
    "IDADE" => 25,
    "SEXO" => "M",
    "CONHECIMENTO" => [
        "PHP", "PYTHON", "JAVA"
    ],
    "EMPRESAS" => [
        "IBM" => 3,
        "GOOGLE" => 4,
        "MICROSOFT" => 3,
        "JSL" => 1
    ]
];
$programadores[] = $programador;

$programador =[
    "NOME" => "João",
    "IDADE" => 23,
    "SEXO" => "M",
    "CONHECIMENTO" => [
        "C#", "C", "C++"
    ],
    "EMPRESAS" => [
        "JSL" => 3,
        "GOOGLE" => 4,
        "VIVO" => 3,
       
    ]
];
$programadores[] = $programador;


$programador =[
    "NOME" => "Maria",
    "IDADE" => 31,
    "SEXO" => "F",
    "CONHECIMENTO" => [
        "C#", "RUBY", "COBOL"
    ],
    "EMPRESAS" => [
        "jSA" => 2,
        "GOOGLE" => 4,      
       
    ]
];
$programadores[] = $programador;

$programador =[
    "NOME" => "Maiara",
    "IDADE" => 18,
    "SEXO" => "F",
    "CONHECIMENTO" => [],
    "EMPRESAS" => []
];
$programadores[] = $programador;

$programador =[
    "NOME" => "Maiara",
    "IDADE" => 18,
    "SEXO" => "F",
    "CONHECIMENTO" => [],
    "EMPRESAS" => [
        "SKI MOUNTAIN PARK" => 2
    ]
];
$programadores[] = $programador;

// echo "<pre>";
// var_dump($programadores);
// echo "</pre>";


foreach ($programadores as $elemento) {
    echo "NOME: ". $elemento['NOME'] ."<br>";
    echo "IDADE: ". $elemento['IDADE'] . "  <br>";
    echo "<b> <i>CONHECIMENTO: </i></b> <br> ";
    
    foreach ($elemento['CONHECIMENTO'] as $linguagem) {
        if($elemento['CONHECIMENTO'] == []){
           echo "SEM CONHECIMENTO";
        }        
        else {
            echo "{$linguagem} <br>"; 
        }              
    }
    if($elemento['IDADE'] >= 30){
        $maior30++;
    }
    else{
        $menor30++;
    }
    echo "<b> <i>EMPRESA: </i> </b><br> ";
    foreach($elemento['EMPRESAS'] as $nome_empresa => $tempo){
        if($tempo > 1){
        echo "{$nome_empresa}: {$tempo} anos <br>";
        }
        else{
            echo "{$nome_empresa}: {$tempo} ano <br>"; 
        }
        $totalexp += $tempo;
    }
    if($totalexp >= 1):
        echo "<b> EXPERIÊNCIA: </b> {$totalexp} anos <br>"; 
    else: 
        echo "<b> SEM EXPERIÊNCIA </b> <br>";
    endif;
    $totalexp = 0;
    echo "------------------------------------- <br>";
    switch ($elemento['SEXO']) {
        case 'F':
            $totalf++;
            break;
        
        case 'M':
            $totalm++;
            break;
    }
}
echo "Maiores de 30 anos: {$maior30} <br>";
echo "Menores de 30 anos: {$menor30} <br>";
echo "Total de mulheres: {$totalf} <br>";
echo "Total de homens: {$totalm} <br>";




