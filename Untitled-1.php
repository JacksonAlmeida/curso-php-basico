<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Curso-PhP</title>
</head>
<body>
    <?php
    
     //jogando valores na uri como paramentros
     $n1 = $_GET["a"];
     $n2 = $_GET["b"];

     echo "<h2>Valores recebidos $n1 e $n2 </h2>";

    $adicao = $n1 + $n2;
    $subtracao = $n1 - $n2;
    $divisao = ($n1 + $n2)/2;
    $resto = $n1 % $n2;

    echo "<h2> Operação matemática </h2>";
    echo "soma =".$adicao;
    echo "<br>subtração = $subtracao";
    echo "<br>divisão = $divisao";
    echo "<br>resto = $resto";
    echo "<br>valor absoluto de $n1 = ".abs($n1);
    echo "<br>potencia de $n1<sup>$n2</sup> = ".pow($n1,$n2);
    echo "<br>raiz quadrada = ".sqrt($n1);
    echo "<br>arrendondando o valor = ".round($n1);
    echo "<br>convertendo para inteiro = ".intval($n2);
    echo "<br>o valor de $n1 para moeda r$ = ".number_format($n1,2);
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>