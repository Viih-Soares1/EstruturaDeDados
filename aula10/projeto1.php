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
$saldo_corrente = 0;
$total_movimento = 0;
$saldo = 0;
$credito_poupanca = 0;
$credito_corrente = 0 ;
$debito_poupanca = 0;
$debito_corrente = 0;
foreach ($movimentacoes as $elemento) {
    echo $elemento ['tipo'] . "<br>";
    echo $elemento ['conta'] . "<br>";
    if ($elemento ['conta'] == 'POUPANÇA' ){
        $totalp += $elemento ['valor_movimento'];     
        if ($totalp >= $saldo_inicial_poupanca){
        echo "Movimentação bloqueada: Valor maior que a poupança! " . $elemento['valor_movimento'] . " <br>"; 
        $totalp -= $elemento['valor_movimento'];
        $saldo_inicial_poupanca -= $totalp;        
        }
        else{
            echo $elemento ['valor_movimento'] . "<br>";           
            }
        if($elemento['tipo'] == 'DÉBITO'):
            $debito_poupanca++;
        else:
            $credito_poupanca++;
        endif;
        
    }
    else{   $saldo_inicial_corrente -= $elemento['valor_movimento'];
            echo $elemento ['valor_movimento'] . "<br>";
            if($elemento['tipo'] == 'DÉBITO'):
                $debito_corrente++;
            else: 
                $credito_corrente++;
            endif;
        }
    $total_movimento ++;
    
    }
    echo "total de movimentos na conta $total_movimento <br>";
    echo "total da poupança $saldo_inicial_poupanca <br>";
    echo "total da corrente $saldo_inicial_corrente <br>";
    echo "total movimentações credito em poupança: $credito_poupanca.  debitos em poupança: $debito_poupanca <br>";
    echo "total movimentações credito em corrente: $credito_corrente.  debitos em corrente: $debito_corrente <br>";
    echo "Lider: Vinicius Gonçalves <br>";
    echo "Analista: Vinicius Silva <br>";
    echo "Programador: Caio Veloso <br>";
