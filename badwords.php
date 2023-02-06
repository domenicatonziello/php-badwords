<?php 

$paragraph = $_GET['paragraph'];
$badwords = $_GET['badwords'];

$censured_paragraph = str_replace($badwords, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1> Paragrafo Originale </h1>
        <p> <?= $paragraph ?> </p>
        <p>Questo paragrafo contiene <?= strlen($paragraph) ?> caratteri </p>
    </div>
    <div>
        <h1> Paragrafo Censurato </h1>
        <p> <?= $censured_paragraph ?></p>
        <p> Questo paragrafo contiene <?= strlen($censured_paragraph) ?> caratteri </p>
    </div>
</body>
</html>