<?php

$vendas = [];

$pedido = [
    "codigo_venda" => 234,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "001",
    "sub_total" => 100,
    "desconto" => 10,
    "valor_total" => 90,
    "forma_pagamento" => "CARTÃO DÉBITO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 4,
            "valor_unitario" => 10,
            "valor_total" => 40
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 3,
            "valor_unitario" => 20,
            "valor_total" => 60
        ]
    ]
];
$vendas[] = $pedido;

$pedido = [
    "codigo_venda" => 235,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "002",
    "sub_total" => 50,
    "desconto" => 0,
    "valor_total" => 50,
    "forma_pagamento" => "CARTÃO CRÉDITO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 3,
            "valor_unitario" => 10,
            "valor_total" => 30
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 1,
            "valor_unitario" => 20,
            "valor_total" => 20
        ]
    ]
];
$vendas[] = $pedido;

$pedido = [
    "codigo_venda" => 236,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "001",
    "sub_total" => 70,
    "desconto" => 10,
    "valor_total" => 60,
    "forma_pagamento" => "DINHEIRO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 3,
            "valor_unitario" => 10,
            "valor_total" => 30
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 2,
            "valor_unitario" => 20,
            "valor_total" => 40
        ]
    ]
];
$vendas[] = $pedido;
$total_vendas = 0;
$total_dinheiro = 0;
$total_credito = 0;
$total_debito = 0;
$total_zeroum = 0;
$total_zerodois = 0;
$total_desconto_zeroum = 0;
$total_desconto_zerodois = 0;
$total_unidade_teste1 = 0;
$total_unidade_teste2 = 0;
$total_valor_teste1 = 0;
$total_valor_teste2 = 0;



foreach($vendas as $elemento){  
    if($elemento['codigo_cliente'] == "001") {
        $total_zeroum += $elemento['valor_total'];
        $total_desconto_zeroum += $elemento['desconto'];       
        
    }
    else {
        $total_zerodois += $elemento['valor_total'];
        $total_desconto_zerodois += $elemento['desconto'];
    }
    foreach ($elemento['itens'] as $desc){
        if($desc['descricao'] == "Produto teste 1"){
                $total_unidade_teste1 += $desc['qtde'];
                $total_valor_teste1 += $desc['valor_total'];
            }
        else{
            $total_unidade_teste2 += $desc['qtde'];
            $total_valor_teste2 += $desc['valor_total'];
        }
    }
    if($elemento['forma_pagamento'] == "DINHEIRO"){
        $total_dinheiro += $elemento['valor_total'];
    }
    elseif($elemento['forma_pagamento'] == "CARTÃO CRÉDITO"){
        $total_credito += $elemento['valor_total'];
    }   
 
    else {
        $total_debito += $elemento['valor_total'];
    }  
    $total_vendas += $elemento['valor_total'];
}


echo "Valor total vendido: $total_vendas <br>";
echo "Valor total em dinheiro: $total_dinheiro <br>";
echo "Valor total em credito: $total_credito <br>";
echo "Valor total em debito: $total_debito <br>";
echo "Valor total cliente 001:  ". $total_zeroum . "<br>";
echo "Valor total cliente 002:  ". $total_zerodois . "<br>";
echo "Total de desconto cliente 001: " . $total_desconto_zeroum . "<br>";
echo "Total de desconto cliente 002: " . $total_desconto_zerodois . "<br>";
echo "Quantidade vendidas produto 1: " . $total_unidade_teste1 . "<br>";
echo "Valor total: " . $total_valor_teste1 . "<br>";
echo "Quantidade vendidas produto 2: " . $total_unidade_teste2 . "<br>";
echo "Valor total: " . $total_valor_teste2 . "<br>";


echo "LIDER: Vinícius Silva <br>";
echo "ANALISTA: Caio Cesar";
echo "Programador: Vinícius Gonçalves";