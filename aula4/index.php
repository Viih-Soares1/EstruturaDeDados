<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" class="css">
    <title>Document</title>
</head>
<body>

      


    <?php 
        $valor1= $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;        
    
    
    ?>
    <main>
    <form method="get" action="<?= $_SERVER['PHP_SELF']; ?>">    
        <label for="valor1">1º Valor</label>
        <input type="number" name="valor1" min="0" value="<?= $valor1 ?>">
        <label for="Peso"> Peso 1</label>
        <input type="number" value="<?= $peso1 ?>" name="peso1" min="1">
        <label for="valor2">2º Valor</label>
        <input type="number" name="valor2" min="0" value="<?= $valor2 ?>">
        <label for="Peso2">Peso 2</label> 
        <input type="number" name="peso2" id="idpeso2" min="1" value="<?= $peso2 ?>">      
        <input type="submit" value="Calcular">        
        </form>
        <button onclick="javascript:window.location.href='aula4.php'">Aula 4</button>
    </main>
    <?php 
    $media= ($valor1 + $valor2) / 2;
    $peso1 = $_GET["peso1"] ?? 1;
    $peso2 = $_GET["peso2"] ?? 1;
    $peso = $peso1 + $peso2;
    $ponderada = (($valor1 * $peso2) + ($valor2 * $peso2)) / $peso;  
    echo "<section> <p> A média ponderada é: " . number_format($ponderada, 2) . "<br>";
    echo " A média simples é: $media </section>";
    ?>

</body>
</html>