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
            height: 500px;
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
        p{
            color: black;
            font-size: larger;
            font-weight: 400;
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
            $Padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $Cotacao = 5.14;
            $Quantia = $_GET['reais'] ?? 0;
            $Conversor = $Quantia / $Cotacao;
            echo "Com o seu dinheiro que é" . numfmt_format_currency($Padrao, $Quantia, "BRL") . " convertido para dólares, vale" . numfmt_format_currency($Padrao, $Cotacao, "USD");
        ?>
    </section>
</body>
</html>