<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
         <?php
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
             echo "O número escolhido foi $numero";
             echo "O seu antecessor é $antecessor";
             echo "O seu sucessor é $sucessor";
         ?>
             <button><a href="exd001.html">Voltar</a></button>
    </section>
</body>
</html>