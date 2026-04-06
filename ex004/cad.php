<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Resultado do Processamento
        </h1>
    </header>

    <main>
        <?php 
           $nome = $_GET["nome"] ?? "Sem Nome";
           $sobrenome = $_GET["email"] ?? "Sem Email";
            echo "<p>É um prazer em lhe conhecer, <strong>$nome $sobrenome</strong>! Esse é o meu site!</p>";
            ?>
            <a href="index.html">Voltar página</a>
    </main>
</body>
</html>