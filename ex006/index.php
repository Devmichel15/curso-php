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
        <h1>Conversor de Moedas</h1>
        <form action="process.php" method="post">
            <label for="value">Valor em Kwanza:</label>
            <input type="number" id="value" name="value" step="0.01" min="0" required>
            <button type="submit">Converter</button>
        </form>
    </main>

</body>

</html>