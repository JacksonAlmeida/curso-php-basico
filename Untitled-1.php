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
   /*{  $n = 4.5; o primeiro irá ser alterado para o ultimo(castin);
        $n = 4;
    ]*/
    
    $nome = "jackson";
    $anos = 23;
    $n = 13;
  /*  $nome = (int) "10jackson"; castin irá forca a traformação de string para o tipo inteiro,
   obs = o numero tem que estar na frente na string */
    echo "$nome $n";
    echo "<p>$nome tem $anos anos</p>"
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>