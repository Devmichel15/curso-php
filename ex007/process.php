<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <?php
    $numero = $_POST['numero'];
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;

    echo "<h1>Antecessor e Sucessor</h1>";
    echo "<p>O número digitado foi: $numero</p>";
    echo "<p>O antecessor é: $antecessor</p>";
    echo "<p>O sucessor é: $sucessor</p>";
    ?>

</body>

</html>