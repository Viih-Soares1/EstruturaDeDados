<?php

$nome = isset($_GET["nome"]) ? $_GET['nome'] : 'Não Existe';
$email = isset($_GET["email"]) ? $_GET["email"] : 'Não Existe';
$endereco = isset($_GET["endereco"]) ? $_GET["endereco"] :  'Não Existe';
$numero = isset($_GET["numero"]) ? $_GET["numero"] : 'Não Existe';


echo "$nome <br> $email";

