 <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rota dos Sonhos - Dados Recebidos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #e6d0f7, #ffd9b3);
            color: #4a148c;
            text-align: center;
        }

        header {
            background: linear-gradient(135deg, #ab47bc, #ff9800);
            color: white;
            padding: 60px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        }

        .slogan {
            font-size: 1.3em;
            font-style: italic;
            margin-top: 10px;
            color: #ffd180;
        }

        nav a {
            color: #ffd180;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            padding: 6px 12px;
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #ffd180;
            color: #6a1b9a;
        }

        main {
            padding: 40px 20px;
        }

        main h1 {
            color: #6a1b9a;
            margin-bottom: 20px;
        }

        .contato-form {
            background-color: #ffffffcc;
            border-radius: 12px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: left;
        }

        .contato-form p {
            margin: 10px 0;
            font-size: 1.05em;
        }

        footer {
            background-color: #ffd9b3;
            padding: 15px;
            font-size: 0.9em;
            color: #4a148c;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>

    <!-- Cabeçalho -->
    <header>
        <h1>✈️ Rota dos Sonhos</h1>
        <p class="slogan">Descubra novos destinos. Viva novas histórias.</p>
        <nav>
            <a href="index.html">🏠 Início</a>
            <a href="filiais.html">🌄 Destinos</a>
            <a href="filiais.html">📦 Pacotes</a>
            <a href="filiais.html">📞 Contato</a>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <main>
        <h1>✅ Dados Recebidos com Sucesso</h1>
        <div class="contato-form">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST["nome"]) . "</p>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";

                if (!empty($_POST["mensagem"])) {
                    echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($_POST["mensagem"])) . "</p>";
                }

                foreach ($_POST as $campo => $valor) {
                    if (!in_array($campo, ["nome", "email", "mensagem"])) {
                        echo "<p><strong>" . ucfirst($campo) . ":</strong> " . htmlspecialchars($valor) . "</p>";
                    }
                }
            } else {
                echo "<p>Nenhum dado foi enviado.</p>";
            }
            ?>
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2025 Rota dos Sonhos - Todos os direitos reservados</p>
    </footer>

</body>

</html>
