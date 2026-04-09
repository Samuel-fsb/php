<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        section{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 300px;
            margin: 0px 0px 0px 0px;
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
    <h1>Resultado da Conversão</h1>
    <section>
        <?php
        $ValorTotal = $_GET["reais"] ?? 0;
        $ValorJSON = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'04-02-2026\'&@dataFinalCotacao=\'04-09-2026\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $ValorDaAPI = json_decode(file_get_contents($ValorJSON), true);
        $ValorConvertido = $ValorTotal / $ValorDaAPI;
        echo "A conversão do seu dinheiro em dólares é $ValorConvertido";
        ?>
        <button><a href="exd004.html">Voltar</a></button>
    </section>
</body>
</html>