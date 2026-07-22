<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <style>
        :root {
            --bg: #0f172a;
            --card: #1e293b;
            --text: #e2e8f0;
            --accent: #38bdf8;
            --accent-dark: #0ea5e9;
            --shadow: rgba(15, 23, 42, 0.35);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #020617 100%);
            color: var(--text);
            display: grid;
            place-items: center;
            padding: 24px;
        }

        .card {
            width: min(100%, 420px);
            background: var(--card);
            border: 1px solid rgba(148, 163, 184, 0.15);
            border-radius: 24px;
            box-shadow: 0 24px 60px var(--shadow);
            padding: 32px;
            text-align: center;
        }

        h1 {
            font-size: clamp(1.5rem, 2.2vw, 2.25rem);
            line-height: 1.1;
            margin-bottom: 18px;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 28px;
        }

        strong {
            color: var(--accent);
            font-size: 1.4rem;
        }

        button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 14px 24px;
            border: none;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: #fff;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 16px 30px rgba(56, 189, 248, 0.25);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 22px 32px rgba(56, 189, 248, 0.3);
        }

        button:focus-visible {
            outline: 3px solid rgba(56, 189, 248, 0.5);
            outline-offset: 4px;
        }
    </style>
</head>

<body>
    <main class="card">
        <h1>Gerando um número aleatório entre 0 e 50</h1>
        <?php
        $min = 0;
        $max = 50;
        $numero = random_int($min, $max);
        echo "<p>O número sorteado é: <strong>$numero</strong></p>";
        ?>
        <button onclick="location.reload()">Sortear Novamente</button>
    </main>
</body>

</html>