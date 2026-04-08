<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando Números Aleatórios</title>
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
        <h1>Trabalhando com números aleatórios</h1>

        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
       
        $min = 0;
        $max = 100;
        $NumeroAleatorio = mt_rand($min, $max);
        
        echo "O valor gerado foi $NumeroAleatorio";
        ?>
        
        <button onclick="javascript:document.location.reload()">Gerar Número</button>
        
    </section>
</body>
</html>