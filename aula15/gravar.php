<?php
function DataFormatoBR($value){
    $arrayData = explode('-', $value);
    return $arrayData[2] . '/' . $arrayData[1] . '/' . $arrayData[0];
}
function DataFormatoING($value){
    $arrayData = explode('/', $value);
    return $arrayData[0]. '-' . $arrayData[1] . '-' . $arrayData[2];
}
$msg = '';
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$datanasci = $_POST["data_nascimento"];
$uf = isset($_POST["uf"]) ? $_POST["uf"] : '';
$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : '';
$linguagens = isset($_POST["linguagens"]) ? $_POST["linguagens"] : '';
$faculdade = isset($_POST["facul"]) ? $_POST["facul"] : '';
$cliente = [];

if ($nome == ''){
   $msg = 'Informe o nome <br>';
} 
if ($email == ''){
    $msg .= 'Informe o Email <br>';
}

if(!is_numeric($idade)){
    $msg.= 'Informe a idade <br>';
}
if(date($datanasci) == true){
    $msg .="Informe a Data de Nascimento";
}
if($uf == ''){
    $msg .= "Escolha um estado <br>";
}
if($sexo == ''){
    $msg .= "Sexo não escolhido<br>";
}
if($linguagens == ""){
    $msg .= "Escolha uma linguagem <br>";
}
if($msg != ''){
    echo $msg;
    echo  "<button onclick=\"javascript:window.location.href='cadastro.html'\">Voltar ao formulário</button> <br>";
}

$cliente = [
    'nome' => "$nome",
    'email' => "$email",
    'data' => "$datanasci",
    'idade' => "$idade",
    'sexo' => "$sexo",
    'UF' => "$uf",
    'faculdade' => "$faculdade",
    'linguagens' => $linguagens      ];

echo json_encode($cliente, JSON_UNESCAPED_UNICODE);

