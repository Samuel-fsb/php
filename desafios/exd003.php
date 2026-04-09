<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="../style.css">
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

        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <h1>
            Conversor de Moedas v1.0
        </h1>
        <form action="#" method="$_GET">
            <label for="reais">
                <p>Quanto reais você tem na carteira?</p>
                <input type="number" name="reais" id="reaisId">
            </label>
            <button type="submit">Converter</button>
        </form>
        <?php 
            $Quantia = $_GET['reais'];
            $Conversor = $Quantia / 5.14;
            echo "<p>Convertido para dólares, o seu dinheiro vale $Conversor.</p>";
        ?>
    </section>
</body>
</html>