<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="card">
        <?php
        $cambio = 0.0016; // Taxa de câmbio do Kwanza para Dólar
        $value = $_POST['value'] ?? 0;
        $valorConvertido = $value * $cambio;
        ?>

        <h1>Resultado da Conversão</h1>
        <p>Valor em Kwanza: <span class="highlight"><?php echo number_format($value, 2, ',', '.'); ?> Kz</span></p>
        <p>Valor em Dólar: <span class="highlight"><?php echo number_format($valorConvertido, 2, ',', '.'); ?> $</span></p>

        <div class="actions">
            <a class="link-button" href="index.php">Nova conversão</a>
        </div>
    </main>

</body>

</html>