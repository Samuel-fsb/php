<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
    <style>
        section{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        button{
          padding: 20px 60px;
          cursor: pointer;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
             <?php
                $numero = $_GET['numero'] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                 echo "<p>O número escolhido foi <strong>$numero</strong></p>";
                 echo "<p>O seu antecessor é <strong>$antecessor</strong></p>";
                 echo "<p>O seu sucessor é <strong>$sucessor</strong></p>";
             ?>
             <button><a href="exd001.html">Voltar</a></button>
    </section>
</body>
</html>