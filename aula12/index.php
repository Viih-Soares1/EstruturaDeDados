<?php 

function SomaNumeros(){
    return 3+3;
}
print(SomaNumeros());

echo '<br>**************************************<br>';

function exibe_nome(){
    echo "Vinícius";
}

exibe_nome();

echo '<br>**************************************<br>';

function exibe_cidade($nome_cidade, $uf){
    echo $nome_cidade . '/' . $uf;
}

exibe_cidade('São Roque', 'SP');
echo '<br>**************************************<br>';
exibe_cidade('Ibiúna', 'SP');
echo '<br>**************************************<br>';
exibe_cidade('Mairinque', 'SP');
echo '<br>**************************************<br>';
exibe_cidade('Aracaju', 'SE');

echo '<br>**************************************<br>';

function calcular($n1, $n2){
    return ($n1 + $n2) / 2;
}

echo calcular(5,5);
echo '<br>**************************************<br>';
echo calcular(6,7);
echo '<br>**************************************<br>';
echo calcular(9,5);
echo '<br>**************************************<br>';
echo calcular(4,3);
echo '<br>**************************************<br>';


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

echo dia_da_semana(7);
echo '<br>**************************************<br>';
echo dia_da_semana(6);
echo '<br>**************************************<br>';
echo dia_da_semana(5);
echo '<br>**************************************<br>';
echo dia_da_semana(4);
echo '<br>**************************************<br>';
echo dia_da_semana(3);
echo '<br>**************************************<br>';
echo dia_da_semana(2);
echo '<br>**************************************<br>';
echo dia_da_semana(1);
echo '<br>**************************************<br>';
echo dia_da_semana(8);

