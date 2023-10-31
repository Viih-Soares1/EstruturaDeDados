<?php
$saldo_inicial_corrente = 1000;
$saldo_inicial_poupanca = 500;

$movimentacoes = [];


$movimentacao = [
    "tipo" => "CRÉDITO",
    "conta"=> "CORRENTE",
    "valor_movimento" => 100
];
$movimentacoes [] = $movimentacao;

$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "POUPANÇA",
    "valor_movimento" => 50
];
$movimentacoes [] = $movimentacao;

$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "POUPANÇA",
    "valor_movimento" => 500
];
$movimentacoes [] = $movimentacao;

$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "CORRENTE",
    "valor_movimento" => 10
];
$movimentacoes [] = $movimentacao;

$saldo_movimento = 0;
$totalp = 0;
$total_movimento = 0;
$saldo = 0;

foreach ($movimentacoes as $elemento) {
    echo $elemento ['tipo'] . "<br>";
    echo $elemento ['conta'] . "<br>";
    if ($elemento ['conta'] == 'POUPANÇA' ){
        $totalp += $elemento ['valor_movimento'];
    }
    if ($totalp >= $saldo_inicial_poupanca){
        echo "CONTA NEGATIVA <br>"; 
    }
    else{
    echo $elemento ['valor_movimento'] . "<br>";
    }
    $total_movimento ++;
    }
    echo "total de movimentos na conta $total_movimento <br>";
    echo "total da poupança $saldo_inicial_poupanca <br>";

    echo "Lider: Vinicius Gonçalves <br>";
    echo "Analista: Vinicius Silva <br>";
    echo "Programador: Caio Veloso <br>";
