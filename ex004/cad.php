<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Resultado do Cadastro</h1>
    </header>

    <main>
        <section class="resultado">
            <?php
            $nome = $_GET['nome'] ?? 'Não informado';
            $email = $_GET['email'] ?? 'Não informado';

            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            ?>
        </section>
    </main>

</body>

</html>