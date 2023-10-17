<?php 
echo "Boa Noite, Vinicera";
echo "<br><h2>";
$media = 5;
$nome = 'Vinicius';
$estourou_em_falta = true;
if ($media >= 6 ){
    echo 'APROVADO';
}else { 
    echo 'REPROVADO';
}
echo "<br>";
if($media == '5'):
    echo 'IGUAL';
else:
    echo 'DIFERENTE';
endif;
echo "<br>";

if($media === '5'):
    echo 'IGUAL';
else:
    echo 'DIFERENTE';
endif;
echo "<br>";
if($media >= 6 && $nome == 'Vinicius'):
    echo 'APROVADO';
else:
    echo 'REPROVADO';
endif;
echo "<br>";
if(6 <= $media || $nome = 'Vinicius'):
    echo 'APROVADO';
else:
    echo 'REPROVADO';
endif;
echo "<br>";
if(!$estourou_em_falta):
    echo'REPROVADO';
else:
    echo 'APROVADO';
endif;
echo "<br>";

if(!$estourou_em_falta && $media >= 6):
    if( $nome == 'Vinicius'):
        echo 'APROVADO'; 
    endif; 
else: 
    echo 'REPROVADO';
endif;

echo "<br>";
if($media >=6 && $nome == 'Vinicius'):
    echo 'APROVADO';
elseif($media == 5):
    echo 'EXAME';
else:
    echo 'REPROVADO';
endif;
echo "<br>";

$sigla = 'F';

switch ($sigla):
    case 'J':
        echo 'JANEIRO';
        break;
    case 'M':
        echo 'MARÇO';
        break;
    case 'N':
        echo 'NOVEMBRO';
        break;
    default:
        echo 'MÊS NÃO ENCONTRADO';
endswitch;
echo "<br>";

