<?php

$alunos = [];

$aluno1 = [
    "nome" => "WILSON",
    "idade" => 25,
    "periodo" => 1,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 3,
            "P2" => 5,
            "P3" => 1,
            "P4" => 3
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 1,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno1;

$aluno2 = [
    "nome" => "MARIA",
    "idade" => 27,
    "periodo" => 1,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 3,
            "P2" => 5,
            "P3" => 1,
            "P4" => 3
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 1,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno2;

$aluno3 = [
    "nome" => "JOANA",
    "idade" => 23,
    "periodo" => 2,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 1,
            "P2" => 1,
            "P3" => 1,
            "P4" => 5
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 2,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno3;

 

    

// 1 - DESCREVA QUANDO PODEMOS USAR "ELSE" OU "ELSEIF" EM UMA INSTRUÇÃO IF
    // R: É utilizado ELSEIF quando se tem mais de duas condições e o IF não é verdadeira, já o ELSE é quando todas as condições declaradas acima não foram atendidas. 
    //if($media >=5) { echo "APROVADO"}
    // elseif ($media =4) { echo "RECUPERAÇÃO"}
    // else { echo "REPROVADO"}    

// 2 - DESCREVA CASOS DE USO PARA "&&" (AND) E "||" (OR) NA INSTRUÇÃO IF
    // $$ é um operador binario, que utiliza da esquerda e direita ex: IF ($media = 5 && $nome = "CAIO") e as duas variaveis tem que ser TRUE. Exemplo acima se a media for 5 e não for nome 'CAIO', não atende o requisito, sendo assim FALSE.
    // || é um operador que utiliza de esquerda ou direita, podendo ter as duas opções ex: IF ($media = 5 || $nome = "CAIO") se uma variavel for TRUE, as duas são. Será FALSE apenas se as duas forem FALSE. Exemplo de cima é se a media não for igual a 5 e o nome do aluno não for CAIO é FALSE.

// 3 - EXIBA MÉDIA DE IDADE DOS ALUNOS
    $mediaidade = 0;
    $totalidade = 0;
    $contador = 0;
    $totalnotasp = 0;
    $totalnotasm = 0;
    $medianotas = 0;

foreach ($alunos as $elemento){
        $totalidade += $elemento['idade'];
        $contador ++;
    }
    $mediaidade = $totalidade / $contador;
        // echo $mediaidade . "<br>";  
        
// 4 - QUAL FOI A MÉDIA POR ALUNO E POR MATÉRIA, LEVANDO EM CONSIDERAÇÃO O PESO
foreach($alunos as $elemento){  
    $totalnotasm = 0;
    $totalnotasp = 0;
    echo $elemento['nome'] . "<br>";  
    foreach ($elemento['matematica']['avaliacao']  as $notas ) {          
         $totalnotasm += $notas * $elemento['matematica']['peso'];
             
     }  
     foreach ($elemento['portugues']['avaliacao']  as $notas ) {          
        $totalnotasp += $notas * $elemento['portugues']['peso'];
            
    }   
     $totalnotasm = $totalnotasm / $elemento['matematica']['peso'];
     $totalnotasp = $totalnotasp / $elemento['portugues']['peso'];    
     echo "Média em Matemática: " . $totalnotasm . "<br>";
     echo "Média em Português: " . $totalnotasp . "<br>";
     // 5 - ALUNOS REPROVADOS E APROVADOS, COM BASE NA MÉDIA 5.0
     if($totalnotasm >= 5){
        echo "APROVADO <br>";
     }
     else {
        echo "REPROVADO";
     }
}



