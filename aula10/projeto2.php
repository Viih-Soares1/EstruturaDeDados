<?php

$pacientes = [];

$paciente = [
    "nome" => "JOÃO",
    "sexo" => "M",
    "idade" => 34,
    "sintomas" => "Dor de Garganta",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "JOANA",
            "data_hora" => "23/10/2023 12:00:34"
        ],
        [
            "departamento" => "TRIAGEM",
            "responsavel" => "PEDRO",
            "data_hora" => "23/10/2023 12:10:55"
        ],
        [
            "departamento" => "CONSULTA",
            "responsavel" => "DR. JAILSON",
            "data_hora" => "23/10/2023 12:56:15"
        ],
        [
            "departamento" => "ENFERMARIA",
            "responsavel" => "PAULA",
            "data_hora" => "23/10/2023 13:46:00"
        ],
    ]
];

$pacientes [] = $paciente;

$paciente = [
    "nome" => "MARIA",
    "sexo" => "F",
    "idade" => 44,
    "sintomas" => "Dor de Cabeça",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "PAULA",
            "data_hora" => "23/10/2023 13:00:34"
        ],
        [
            "departamento" => "TRIAGEM",
            "responsavel" => "KELLY",
            "data_hora" => "23/10/2023 13:10:55"
        ],
        [
            "departamento" => "CONSULTA",
            "responsavel" => "DR. MARCOS",
            "data_hora" => "23/10/2023 13:56:15"
        ]
    ]
];

$pacientes [] = $paciente;

$paciente = [
    "nome" => "MARIO",
    "sexo" => "M",
    "idade" => 24,
    "sintomas" => "Dor de Barriga",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "JOANA",
            "data_hora" => "23/10/2023 15:00:34"
        ]
    ]
];

$pacientes [] = $paciente;


$total_de_pacientes = 0;

$recepcao = 0;

$total_j = 0;
$total_p = 0;
$total_m = 0;
$total_k = 0;
$total_ja = 0;  
$total_pedro = 0;  
$total_mar = 0;  



foreach ($pacientes as $elemento) {
    echo $elemento['nome']. "<br>";

    $total_de_pacientes ++;


    foreach ($elemento['fluxo'] as $responsavel ) {
        
        switch ($responsavel['responsavel']) {
            case 'JOANA':
                $total_j ++;
                break;
            case 'PEDRO':
                $total_pedro ++;
                break;
            case 'KELLY':
                $total_k ++;
                break;
            case 'MARIO':
                $total_m ++;
                break;
            case 'DR. MARCOS':
                $total_mar ++;
                break;
            case 'PAULA':
                $total_p ++;
                break;
           
        }
    }     
      

    

  
 
}

echo "<p>Total de pacientes que entraram no hospital é de $total_de_pacientes</p>";
echo "<p>Total de pacientes na recepção $recepcao</p>";
echo "<p>Nomes Joana atendeu $total_j </p>";
echo "<p>Nomes Pedro atendeu $total_pedro</p>";
echo "<p>Nomes Kelly$total_k</p>";
echo "<p>Nomes Marcos $total_mar</p>";
echo "<p>Nomes Paula $total_p</p>";



echo "<p>Líder: Caio Veloso</p>";
echo "<p>Analista: Vinicius Gonçalves</p>";
echo "<p>Programador: Vinicius Silva</p>";