<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>

    <?php
        $nome = "Gustavo";
        $sobrenome = "Samuel";
        const PAIS = "Brasil";

        $nome = "Rafael";
        
        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;

        $nome3 ="Julia";
        echo "É verdade que seu nome é  $nome3?";

        $salario = 2333.45;
        echo "Seu salário é de $salario!";

        const _TX = 569;
        echo "Resultado " . _TX;

    ?>


</body>
</html>